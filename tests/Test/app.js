const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answerIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];

let correctAnswers = 0;
let attempt = 0;


function setAvailableQuestions() {
    const totalQuestions = quiz.length;
    for (let i = 0; i < totalQuestions; i++) {
        availableQuestions.push(quiz[i]);
    }
}

function getNewQuestion() {
    questionNumber.innerHTML = "Питання " + (questionCounter + 1) + " з " + quiz.length;

    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)];
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;

    const index1 = availableQuestions.indexOf(questionIndex);
    availableQuestions.splice(index1, 1);

    if(currentQuestion.hasOwnProperty("img")){
        const img = document.createElement("img");
        img.src = currentQuestion.img;
        questionText.appendChild(img);
    }

    const optionLength = currentQuestion.options.length;
    for (let i = 0; i < optionLength; i++) {
        availableOptions.push(i);
    }
    optionContainer.innerHTML = "";
    for (let i = 0; i < optionLength; i++) {
        const optonIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];

        const index2 = availableOptions.indexOf(optonIndex);
        availableOptions.splice(index2, 1);

        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optonIndex];
        option.id = optonIndex;
        option.className = "option";
        optionContainer.appendChild(option);
        option.setAttribute("onclick", "getResult(this)");
    }
    questionCounter++;
}

function getResult(element) {
    const id = parseInt(element.id);
    if (id === currentQuestion.answer) {
        element.classList.add("correct");
        updateAnswerIndicator("correct");
        correctAnswers++;
    }
    else {
        element.classList.add("wrong");
        updateAnswerIndicator("wrong");
        const optionLen = optionContainer.children.length;
        for (let i = 0; i < optionLen; i++) {
            if (parseInt(optionContainer.children[i].id) === currentQuestion.answer) {
                optionContainer.children[i].classList.add("correct");
            }
        }
    }
    attempt++;
    unclickableOptions();
}

function unclickableOptions() {
    const optionLen = optionContainer.children.length;
    for (let i = 0; i < optionLen; i++) {
        optionContainer.children[i].classList.add("already-answered");
    }
}

function answersIndicator() {
    answerIndicatorContainer.innerHTML = '';
    const totalQuestions = quiz.length;
    for (let i = 0; i < totalQuestions; i++) {
        const indicator = document.createElement("div");
        answerIndicatorContainer.appendChild(indicator);

    }
}

function updateAnswerIndicator(markType) {
    answerIndicatorContainer.children[questionCounter - 1].classList.add(markType);
}

function next() {
    if (questionCounter === quiz.length) {
        quizOver();
    }
    else {
        getNewQuestion();
    }
}

function quizOver() {
    quizBox.classList.add("hide");
    resultBox.classList.remove("hide");
    quizResult();
}

function quizResult() {
    resultBox.querySelector(".total-question").innerHTML = quiz.length
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswers;
    const percentage = (correctAnswers / quiz.length) * 100;
    resultBox.querySelector(".total-percentage").innerHTML = percentage.toFixed() + "%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz.length;
}

function resetQuiz() {
     questionCounter = 0;
 
     correctAnswers = 0;
     attempt = 0;

}

function tryAgainQuiz() {
    resultBox.classList.add("hide");
    quizBox.classList.remove("hide");
    resetQuiz();
    startQuiz();
}

function goToHome() {
    resultBox.classList.add("hide");
    homeBox.classList.remove("hide");
    resetQuiz();
}

function startQuiz() {
    homeBox.classList.add("hide");
    quizBox.classList.remove("hide");
    setAvailableQuestions();
    getNewQuestion();

    answersIndicator();
}

window.onload = function(){
    homeBox.querySelector(".total-question").innerHTML = quiz.length;
}