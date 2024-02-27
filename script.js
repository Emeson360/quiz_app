let q1 = document.querySelector('#q1').innerHTML;
let q1_opt_a = document.querySelector('#q1_opt_a').innerHTML;
let q1_opt_b = document.querySelector('#q1_opt_b').innerHTML;
let q1_opt_c = document.querySelector('#q1_opt_c').innerHTML;
let q1_opt_d = document.querySelector('#q1_opt_d').innerHTML;
let q1_answer = document.querySelector('#q1_answer').innerHTML;

let q2 = document.querySelector('#q2').innerHTML;
let q2_opt_a = document.querySelector('#q2_opt_a').innerHTML;
let q2_opt_b = document.querySelector('#q2_opt_b').innerHTML;
let q2_opt_c = document.querySelector('#q2_opt_c').innerHTML;
let q2_opt_d = document.querySelector('#q2_opt_d').innerHTML;
let q2_answer = document.querySelector('#q2_answer').innerHTML;

let q3 = document.querySelector('#q3').innerHTML;
let q3_opt_a = document.querySelector('#q3_opt_a').innerHTML;
let q3_opt_b = document.querySelector('#q3_opt_b').innerHTML;
let q3_opt_c = document.querySelector('#q3_opt_c').innerHTML;
let q3_opt_d = document.querySelector('#q3_opt_d').innerHTML;
let q3_answer = document.querySelector('#q3_answer').innerHTML;

let q4 = document.querySelector('#q4').innerHTML;
let q4_opt_a = document.querySelector('#q4_opt_a').innerHTML;
let q4_opt_b = document.querySelector('#q4_opt_b').innerHTML;
let q4_opt_c = document.querySelector('#q4_opt_c').innerHTML;
let q4_opt_d = document.querySelector('#q4_opt_d').innerHTML;
let q4_answer = document.querySelector('#q4_answer').innerHTML;

let q5 = document.querySelector('#q5').innerHTML;
let q5_opt_a = document.querySelector('#q5_opt_a').innerHTML;
let q5_opt_b = document.querySelector('#q5_opt_b').innerHTML;
let q5_opt_c = document.querySelector('#q5_opt_c').innerHTML;
let q5_opt_d = document.querySelector('#q5_opt_d').innerHTML;
let q5_answer = document.querySelector('#q5_answer').innerHTML;

let q6 = document.querySelector('#q6').innerHTML;
let q6_opt_a = document.querySelector('#q6_opt_a').innerHTML;
let q6_opt_b = document.querySelector('#q6_opt_b').innerHTML;
let q6_opt_c = document.querySelector('#q6_opt_c').innerHTML;
let q6_opt_d = document.querySelector('#q6_opt_d').innerHTML;
let q6_answer = document.querySelector('#q6_answer').innerHTML;

let q7 = document.querySelector('#q7').innerHTML;
let q7_opt_a = document.querySelector('#q7_opt_a').innerHTML;
let q7_opt_b = document.querySelector('#q7_opt_b').innerHTML;
let q7_opt_c = document.querySelector('#q7_opt_c').innerHTML;
let q7_opt_d = document.querySelector('#q7_opt_d').innerHTML;
let q7_answer = document.querySelector('#q7_answer').innerHTML;

let q8 = document.querySelector('#q8').innerHTML;
let q8_opt_a = document.querySelector('#q8_opt_a').innerHTML;
let q8_opt_b = document.querySelector('#q8_opt_b').innerHTML;
let q8_opt_c = document.querySelector('#q8_opt_c').innerHTML;
let q8_opt_d = document.querySelector('#q8_opt_d').innerHTML;
let q8_answer = document.querySelector('#q8_answer').innerHTML;

let q9 = document.querySelector('#q9').innerHTML;
let q9_opt_a = document.querySelector('#q9_opt_a').innerHTML;
let q9_opt_b = document.querySelector('#q9_opt_b').innerHTML;
let q9_opt_c = document.querySelector('#q9_opt_c').innerHTML;
let q9_opt_d = document.querySelector('#q9_opt_d').innerHTML;
let q9_answer = document.querySelector('#q9_answer').innerHTML;

let q10 = document.querySelector('#q10').innerHTML;
let q10_opt_a = document.querySelector('#q10_opt_a').innerHTML;
let q10_opt_b = document.querySelector('#q10_opt_b').innerHTML;
let q10_opt_c = document.querySelector('#q10_opt_c').innerHTML;
let q10_opt_d = document.querySelector('#q10_opt_d').innerHTML;
let q10_answer = document.querySelector('#q10_answer').innerHTML;


const questions = [
	{
		question: q1,
		answers: [
			{ text: q1_opt_a, correct: q1_opt_a == q1_answer ? true : false },
			{ text: q1_opt_b, correct: q1_opt_b == q1_answer ? true : false },
			{ text: q1_opt_c, correct: q1_opt_c == q1_answer ? true : false },
			{ text: q1_opt_d, correct: q1_opt_d == q1_answer ? true : false }
		]
	},

	{
		question: q2,
		answers: [
			{ text: q2_opt_a, correct: q2_opt_a == q2_answer ? true : false },
			{ text: q2_opt_b, correct: q2_opt_b == q2_answer ? true : false },
			{ text: q2_opt_c, correct: q2_opt_c == q2_answer ? true : false },
			{ text: q2_opt_d, correct: q2_opt_d == q2_answer ? true : false }
		]
	},

	{
		question: q3,
		answers: [
			{ text: q3_opt_a, correct: q3_opt_a == q3_answer ? true : false },
			{ text: q3_opt_b, correct: q3_opt_b == q3_answer ? true : false },
			{ text: q3_opt_c, correct: q3_opt_c == q3_answer ? true : false },
			{ text: q3_opt_d, correct: q3_opt_d == q3_answer ? true : false }
		]
	},

	{
		question: q4,
		answers: [
			{ text: q4_opt_a, correct: q4_opt_a == q4_answer ? true : false },
			{ text: q4_opt_b, correct: q4_opt_b == q4_answer ? true : false },
			{ text: q4_opt_c, correct: q4_opt_c == q4_answer ? true : false },
			{ text: q4_opt_d, correct: q4_opt_d == q4_answer ? true : false }
		]
	},

	{
		question: q5,
		answers: [
			{ text: q5_opt_a, correct: q5_opt_a == q5_answer ? true : false },
			{ text: q5_opt_b, correct: q5_opt_b == q5_answer ? true : false },
			{ text: q5_opt_c, correct: q5_opt_c == q5_answer ? true : false },
			{ text: q5_opt_d, correct: q5_opt_d == q5_answer ? true : false }
		]
	},

	{
		question: q6,
		answers: [
			{ text: q6_opt_a, correct: q6_opt_a == q6_answer ? true : false },
			{ text: q6_opt_b, correct: q6_opt_b == q6_answer ? true : false },
			{ text: q6_opt_c, correct: q6_opt_c == q6_answer ? true : false },
			{ text: q6_opt_d, correct: q6_opt_d == q6_answer ? true : false }
		]
	},

	{
		question: q7,
		answers: [
			{ text: q7_opt_a, correct: q7_opt_a == q7_answer ? true : false },
			{ text: q7_opt_b, correct: q7_opt_b == q7_answer ? true : false },
			{ text: q7_opt_c, correct: q7_opt_c == q7_answer ? true : false },
			{ text: q7_opt_d, correct: q7_opt_d == q7_answer ? true : false }
		]
	},

	{
		question: q8,
		answers: [
			{ text: q8_opt_a, correct: q8_opt_a == q8_answer ? true : false },
			{ text: q8_opt_b, correct: q8_opt_b == q8_answer ? true : false },
			{ text: q8_opt_c, correct: q8_opt_c == q8_answer ? true : false },
			{ text: q8_opt_d, correct: q8_opt_d == q8_answer ? true : false }
		]
	},

	{
		question: q9,
		answers: [
			{ text: q9_opt_a, correct: q9_opt_a == q9_answer ? true : false },
			{ text: q9_opt_b, correct: q9_opt_b == q9_answer ? true : false },
			{ text: q9_opt_c, correct: q9_opt_c == q9_answer ? true : false },
			{ text: q9_opt_d, correct: q9_opt_d == q9_answer ? true : false }
		]
	},

	{
		question: q10,
		answers: [
			{ text: q10_opt_a, correct: q10_opt_a == q10_answer ? true : false },
			{ text: q10_opt_b, correct: q10_opt_b == q10_answer ? true : false },
			{ text: q10_opt_c, correct: q10_opt_c == q10_answer ? true : false },
			{ text: q10_opt_d, correct: q10_opt_d == q10_answer ? true : false }
		]
	}

];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-button");
const scoreForm = document.getElementById("score_form");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

const startQuiz = () => {
	currentQuestionIndex = 0;
	score = 0;
	nextButton.innerHTML = "Next";
	const shuffledQuestions = shuffleArray(questions);
	localStorage.setItem('quizQuestions', JSON.stringify(shuffledQuestions));
	showQuestions();
};


const shuffleArray = (array) => {
	for (let i = array.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1));
		[array[i], array[j]] = [array[j], array[i]];
	}
	return array;
};

const showQuestions = () => {
	resetState();
	const storedQuestions = JSON.parse(localStorage.getItem('quizQuestions'));
	let currentQuestion = storedQuestions[currentQuestionIndex];
	let questionNo = currentQuestionIndex + 1;

	questionElement.innerHTML = `${questionNo}. ${currentQuestion.question}.`;



	currentQuestion.answers.forEach(answer => {
		const button = document.createElement("button");
		button.innerText = answer.text;
		button.classList.add("btn");
		answerButtons.appendChild(button);
		if (answer.correct) {
			button.dataset.correct = answer.correct;
		}
		button.addEventListener("click", selectedAnswer);
	});
};

const resetState = () => {
	nextButton.style.display = "none";
	while (answerButtons.firstChild) {
		answerButtons.removeChild(answerButtons.firstChild);
	}
};

const selectedAnswer = (e) => {
	const selectedBtn = e.target;
	const isCorrect = selectedBtn.dataset.correct === "true";
	if (isCorrect) {
		selectedBtn.classList.add("answerClicked");
		score++;
	} else {
		selectedBtn.classList.add("answerClicked");
	}
	Array.from(answerButtons.children).forEach(button => {
		button.disabled = true;
	});
	nextButton.style.display = "block";
};

nextButton.addEventListener("click", () => {
	const storedQuestions = JSON.parse(localStorage.getItem('quizQuestions'));
	if (currentQuestionIndex < storedQuestions.length) {
		handleNextButton();
	} else {
		startQuiz();
	}
});

const handleNextButton = () => {
	currentQuestionIndex++;
	const storedQuestions = JSON.parse(localStorage.getItem('quizQuestions'));
	if (currentQuestionIndex < storedQuestions.length) {
		showQuestions();
	} else {
		submitScore();
		questionElement.style.display = "none";

	}
};

const submitScore = () => {
	resetState();
	const form = document.createElement("form");
	const input = document.createElement("input");
	const submit = document.createElement("input");

	form.setAttribute('method', 'POST');
	form.setAttribute('action', 'controllers/userControllers/cbt-logic.php');
	input.setAttribute('type', 'text');
	input.setAttribute('name', 'score');
	input.classList.add('score-inp');
	submit.setAttribute('type', 'submit');
	submit.setAttribute('name', 'submit');
	submit.classList.add('submit-btn');

	scoreForm.appendChild(form);
	form.appendChild(input);
	form.appendChild(submit);

	input.value = score;
	localStorage.setItem("studentScore", score.toString());

	// window.addEventListener("beforeunload", (e) => {
	// 	e.preventDefault();
	// 	e.returnValue = score;
	// })
};

// const showScore = () => {
// 	resetState();
// 	const storedScore = localStorage.getItem("userScore");
// 	if (storedScore) {
// 		score = parseInt(storedScore)
// 	}
// 	questionElement.innerHTML = `You Scored ${score} Out Of ${questions.length}`;
// 	nextButton.innerHTML = "Exam Is Over";
// 	nextButton.style.display = "block";
// 	nextButton.disabled = true;
// 	localStorage.setItem("userScore", score.toString());

// 	window.addEventListener("beforeunload", (e) => {
// 		e.preventDefault();
// 		e.returnValue = score;
// 	})
// };









// window.onload = function () {
// 	const storedScore = localStorage.getItem("userScore");
// 	if (storedScore) {
// 		score = parseInt(storedScore);
// 		showScore();
// 	}
// }

startQuiz();

// Exam count down
time_exam_started = new Date();
// console.log('Time exam started in JS: ' + time_exam_started);

let subject = document.getElementById('subject').value;

function addMinutesToCountdown(date, minutes) {
	let hours = time_exam_started.getHours();

	date.setMinutes(date.getMinutes() + minutes)
	// console.log('Time exam Ends in JS: ' + date);
	var countDownDate = new Date(date).getTime();
	return countDownDate;

}

// Exam Duration 
let duration;
if (subject == 'Mathematics') {
	duration = 20;
}
else {
	duration = 10;
}
var countDownTime = addMinutesToCountdown(new Date(time_exam_started), duration);

// Update the count down every 1 second
var examTime = setInterval(function () {

	// Get today's date and time
	var now = new Date().getTime();

	// Find the timeDuration between now and the count down date
	var timeDuration = countDownTime - now;

	var minutes = Math.floor((timeDuration % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((timeDuration % (1000 * 60)) / 1000);

	if (minutes < 10) {
		minutes = '0' + minutes;
	}
	if (seconds < 10) {
		seconds = '0' + seconds;
	}

	document.getElementById('minutes').innerHTML = minutes + ' : ';
	document.getElementById('seconds').innerHTML = seconds;

	// If the count down is over, write some text 
	if (timeDuration < 0) {
		localStorage.setItem("studentScore", score.toString());
		clearInterval(examTime);
		window.location.href = 'controllers/userControllers/cbt-logic.php?score=' + score;
	}
}, 1000);