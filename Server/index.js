const express = require("express");
const bodyParser = require("body-parser");
const session = require("express-session");
const passport = require("passport");
const bcrpyt = require("bcrypt");
const LocalStrategy = require('passport-local').Strategy;
const app = express();
const user = require("./databases/userInfo");
const Class = require("./databases/classesInfo");
app.set('view engine', "ejs");
app.use(express.static("public"));
app.use(bodyParser.urlencoded({
    extended: true
}));
app.use(session({
    secret: 'keyboard cat',
    resave: false,
    saveUninitialized: true,
}));
app.use(passport.initialize());
app.use(passport.session());


passport.use(new LocalStrategy(user.authenticate()));
passport.serializeUser(function (_user, done) {
    done(null, _user.id);
});
passport.deserializeUser(function (id, done) {
    user.findById(id, function (err, _user) {
        done(err, _user);
    });
});

app.post("/login", function (req, res) {
    console.log(req.body.username, req.body.password);
    const newUser = new user({
        username: req.body.username,
        password: req.body.password,
    });
    if (req.isAuthenticated()) {
        return res.status(200).send("User found");
    }
    req.logIn(newUser, function (err) {
        if (err) {
            console.log(err);
            return res.status(404).send("User not found!");
        } else passport.authenticate("local")(req, res, function () {
            return res.status(200).send("User found");
        });


    });
});

app.post("/register", function (req, res) {
    user.register({
        username: req.body.username
    }, req.body.password, function (err, result) {
        if (err) res.status(404).send("User already registered");
        else passport.authenticate("local")(req, res, function () {
            return res.status(200).send("User registered");

        });
    });
});

app.get('/teacher', function (req, res) {
    if (req.isAuthenticated()) {
        res.send({
            "classes": req.user.classes
        });
    } else res.send("Hola");
});

app.get("/student/:classid", function (req, res) {
    if (req.isAuthenticated()) {
        Class.findById(req.params.classid, function (err, current_class) {
            if (err) res.status(404).send("Class Not Found!");
            else res.status(200).send(current_class)
        });
    }
});

app.post("/student/:classid", function (req, res) {
    if (req.isAuthenticated()) {
        Class.findById(req.params.classid, function (err, validClass) {
            if (err) console.log(err);
            else if (validClass === null) res.status(404).send("Not a valid class");
            else {
                bcrpyt.compare(req.body.password, validClass.password, function (err, val) {
                    if (err) console.log(err);
                    if (val) {
                        req.user.classes.push(req.params.classid);
                        req.user.save();
                        return res.status(200).send("Success!");
                    }
                });
            }
        });
    }
});

app.post("/teacher/create/test", function(req, res){
    if(req.isAuthenticated()){

    }
});

app.post("/teacher/create/class", function (req, res) {
    if (req.isAuthenticated()) {
        bcrpyt.hash(req.body.password, 10, function (err, encrypted) {
            if (err) console.log(err);
            else {
                let newClass = new Class({
                    teacher: req.user.id,
                    password: encrypted,
                    subject: req.body.subject,
                    description: req.body.description
                }).save();
                req.user.classes.push(newClass);
                req.user.save();
                res.status(200).send("Class created");
            }
        });
    } else res.send("Not authenticated!");
});


app.post("/teacher/create/class", function (req, res) {
    if (req.isAuthenticated()) {
        bcrpyt.hash(req.body.password, 10, function (err, encrypted) {
            if (err) console.log(err);
            else {
                let newClass = new Class({
                    teacher: req.user.id,
                    password: encrypted,
                    subject: req.body.subject,
                    description: req.body.description
                }).save();
                req.user.classes.push(newClass);
                req.user.save();
                res.status(200).send("Class created");
            }
        });
    } else res.send("Not authenticated!");
});

app.get('/student', function (req, res) {
    if (req.isAuthenticated()) {
        user.findById(req.user.id, function (err, foundUser) {
            return res.status(200).send({
                "classes": foundUser['classes']
            });
        });
    } else res.send("Hola");
});

app.get("/logout", function (req, res) {
    if (req.isAuthenticated()) {
        req.session.destroy(function (err) {
            return res.status(200).send("User Logged Out!");
        });
    }
    return res.status(404).send("Login First");
});

// passport.authenticate('local')(function(err){
//     if(err) {console.log(err); res.status(404).send("User not found!");}
//     if (!user) res.status(404).send("User not found!");
//     req.logIn(user, function(err) {
//         if (err) {console.log(err);return next(err);};
//         return res.status(200).send("User found");
//       });
// })
// const newUser = new user({
//     username: req.body.username,
//     password: req.body.password
// });
// user.findOne({
//     username: req.body.username
// }, {
//     password: 1,
//     _id: 0
// }, function (err, result) {
//     if (err) console.log(err);
//     else {
//         if (result === null) res.status(404).send("User not found!");
//         else bcrypt.compare(req.body.password, result.password, function (err, val) {
//             if (val) res.status(200).send("User found");
//             else res.status(404).send("User not found!");
//         });
//     }
// });


app.get("/", function (req, res) {
    return res.render('home', {loggedin: req.isAuthenticated()});
});

app.listen(3000, function () {
    console.log("Server has started");
});