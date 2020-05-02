const mongoose = require("mongoose");
mongoose.connect("mongodb://localhost:27018/questionsDB", {
    useNewUrlParser: true,
    useUnifiedTopology: true
});
const question_schema = new mongoose.Schema({
        type: String,
        question: String,
        answers: Array,
        correctAnswer: Array,
});
const question = mongoose.model("class", question_schema);
module.exports = question;