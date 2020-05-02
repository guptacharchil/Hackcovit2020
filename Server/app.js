const express = require('express'),
    Session = require('express-session'),
    bodyParse = require('body-parser'),
    mongoose = require('mongoose'),
    middleware = require('connect-ensure-login'),
    FileStore = require('session-file-store')(Session),
    config = require('./config/default'),
    flash = require('connect-flash'),
    port = 3333,
    app = express(),
    passport = require('./auth/passport'), node_media_server = require('./media_server');;


app.use(passport.initialize());
app.use(passport.session());

mongoose.connect('mongodb://127.0.0.1/nodeStream' , { useNewUrlParser: true });
 
app.set('view engine', 'ejs');
app.use(express.static('public'));
app.use(flash());
app.use(require('cookie-parser')());
app.use(bodyParse.urlencoded({extended: true}));
app.use(bodyParse.json({extended: true}));
 
app.use(Session({
    store: new FileStore({
        path : './server/sessions'
    }),
    secret: config.server.secret,
    maxAge : Date().now + (60 * 1000 * 30)
}));

app.use('/login', require('./routes/login'));
app.use('/register', require('./routes/register'));

app.get('*', middleware.ensureLoggedIn(), (req, res) => {
    res.render('index');
});
node_media_server.run();
app.listen(port, () => console.log(`App listening on ${port}!`));