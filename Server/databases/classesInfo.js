const mongoose = require("mongoose");
mongoose.connect("mongodb://localhost:27018/classDB", {
    useNewUrlParser: true,
    useUnifiedTopology: true
});
const class_schema = new mongoose.Schema({
    teacher: String,
    password: String,
    subject: String,
    description: String,
    students: Array,
    tests: Array,
});
const Class = mongoose.model("class", class_schema);
module.exports = Class;