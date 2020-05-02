const mongoose = require("mongoose");
mongoose.connect("mongodb://localhost:27018/testDB", {
    useNewUrlParser: true,
    useUnifiedTopology: true
});
const test = new mongoose.Schema({
    class: String,
    questions: Array,
});
const test = mongoose.model("class", test);
module.exports = test;