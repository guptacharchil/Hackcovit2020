const mongoose = require("mongoose");
const passportLocalMogoose = require("passport-local-mongoose");
mongoose.connect("mongodb://localhost:27018/userDB", {
    useNewUrlParser: true,
    useUnifiedTopology: true
});
const user_schema = new mongoose.Schema({
    username: String,
    password: String,
    role: String,
    classes: Array,
});
user_schema.plugin(passportLocalMogoose);
const user = mongoose.model("user", user_schema);
module.exports = user;