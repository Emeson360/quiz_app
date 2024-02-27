<?php
include_once __DIR__ . '/config/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CBT | EASS CBT</title>
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/logo.png">

	<link rel="stylesheet" href="styles.css">

	<style>
		input.submit-btn {
			display: block;
			width: 20%;
			padding: 15px;
			border-radius: 8px;
			cursor: pointer;
			background-color: #0767B8;
			color: #f4f6f7;
			font-size: 17px;
			font-weight: 700;
			border: 0px;
		}

		.score-inp {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			display: none;
		}

		.pri-bg {
			background-color: #082b43;
			/* color: red; */
			color: white;
			font-size: 20px;
			border-radius: 10px;
			padding: 5px 10px;
		}
	</style>

</head>

<body>
	<div class="container">
		<div class="head">
			<h2><span>Emmanuel Anglican Secondary School </span> CBT (2nd Term Test)</h2>
			<?php
			if (isset($_SESSION['class']) && isset($_SESSION['subject'])) {
				$class = $_SESSION['class'];
				if ($_SESSION['subject'] == 'English_Language') {
					$subject = 'English Language';
				} elseif ($_SESSION['subject'] == 'Business_Studies') {
					$subject = 'Business Studies';
				} elseif ($_SESSION['subject'] == 'Agric_Science') {
					$subject = 'Agric Science';
				} elseif ($_SESSION['subject'] == 'Basic_Science') {
					$subject = 'Basic Science';
				} elseif ($_SESSION['subject'] == 'Basic_Technology') {
					$subject = 'Basic Technology';
				} elseif ($_SESSION['subject'] == 'Social_Studies') {
					$subject = 'Social Studies';
				} elseif ($_SESSION['subject'] == 'Civic_Education') {
					$subject = 'Civic Education';
				} elseif ($_SESSION['subject'] == 'Computer_Studies') {
					$subject = 'Computer Studies';
				} elseif ($_SESSION['subject'] == 'French_Language') {
					$subject = 'French Language';
				} elseif ($_SESSION['subject'] == 'CCA') {
					$subject = 'CCA';
				} elseif ($_SESSION['subject'] == 'Home_Economics') {
					$subject = 'Home Economics';
				} elseif ($_SESSION['subject'] == 'Security_Education') {
					$subject = 'Security Education';
				} else {
					$subject = $_SESSION['subject'];
				}
			}

			if (isset($_SESSION['cbt'])) {
				danger_alert_unlimited($_SESSION['cbt']);
				unset($_SESSION['cbt']);
			}

			?>

			<div class="flex">
				<h3>Subject: <?= $subject ?> </h3>
				<h3>Class: <?= $class ?> </h3>

				<div class="count_timer flex pri-bg">
					<div>
						<p id="minutes">00</p>
					</div>

					<div style="margin-left: 4px;">
						<p id="seconds">00</p>
					</div>

				</div>

			</div>
			<input type="hidden" id="subject" value="<?= $subject ?>">
		</div>
		<div class="quiz">
			<?php
			$query_question = mysqli_query($con, "SELECT * FROM questions WHERE class = '$class' AND subject = '$subject'");
			if (mysqli_num_rows($query_question) == 1) {
				$question_data = mysqli_fetch_assoc($query_question);
			}

			?>
			<?php if ($question_data['instruction'] != '') : ?>
				<h3 id="instruction"><?= $question_data['instruction'] ?></h3>
			<?php endif ?>

			<h3 id="q1" class="hide"><?= $question_data['q1'] ?></h3>
			<h3 id="q1_opt_a" class="hide"><?= $question_data['q1_opt_a'] ?></h3>
			<h3 id="q1_opt_b" class="hide"><?= $question_data['q1_opt_b'] ?></h3>
			<h3 id="q1_opt_c" class="hide"><?= $question_data['q1_opt_c'] ?></h3>
			<h3 id="q1_opt_d" class="hide"><?= $question_data['q1_opt_d'] ?></h3>
			<h3 id="q1_answer" class="hide"><?= $question_data['q1_answer'] ?></h3>

			<h3 id="q2" class="hide"><?= $question_data['q2'] ?></h3>
			<h3 id="q2_opt_a" class="hide"><?= $question_data['q2_opt_a'] ?></h3>
			<h3 id="q2_opt_b" class="hide"><?= $question_data['q2_opt_b'] ?></h3>
			<h3 id="q2_opt_c" class="hide"><?= $question_data['q2_opt_c'] ?></h3>
			<h3 id="q2_opt_d" class="hide"><?= $question_data['q2_opt_d'] ?></h3>
			<h3 id="q2_answer" class="hide"><?= $question_data['q2_answer'] ?></h3>

			<h3 id="q3" class="hide"><?= $question_data['q3'] ?></h3>
			<h3 id="q3_opt_a" class="hide"><?= $question_data['q3_opt_a'] ?></h3>
			<h3 id="q3_opt_b" class="hide"><?= $question_data['q3_opt_b'] ?></h3>
			<h3 id="q3_opt_c" class="hide"><?= $question_data['q3_opt_c'] ?></h3>
			<h3 id="q3_opt_d" class="hide"><?= $question_data['q3_opt_d'] ?></h3>
			<h3 id="q3_answer" class="hide"><?= $question_data['q3_answer'] ?></h3>

			<h3 id="q4" class="hide"><?= $question_data['q4'] ?></h3>
			<h3 id="q4_opt_a" class="hide"><?= $question_data['q4_opt_a'] ?></h3>
			<h3 id="q4_opt_b" class="hide"><?= $question_data['q4_opt_b'] ?></h3>
			<h3 id="q4_opt_c" class="hide"><?= $question_data['q4_opt_c'] ?></h3>
			<h3 id="q4_opt_d" class="hide"><?= $question_data['q4_opt_d'] ?></h3>
			<h3 id="q4_answer" class="hide"><?= $question_data['q4_answer'] ?></h3>

			<h3 id="q5" class="hide"><?= $question_data['q5'] ?></h3>
			<h3 id="q5_opt_a" class="hide"><?= $question_data['q5_opt_a'] ?></h3>
			<h3 id="q5_opt_b" class="hide"><?= $question_data['q5_opt_b'] ?></h3>
			<h3 id="q5_opt_c" class="hide"><?= $question_data['q5_opt_c'] ?></h3>
			<h3 id="q5_opt_d" class="hide"><?= $question_data['q5_opt_d'] ?></h3>
			<h3 id="q5_answer" class="hide"><?= $question_data['q5_answer'] ?></h3>

			<h3 id="q6" class="hide"><?= $question_data['q6'] ?></h3>
			<h3 id="q6_opt_a" class="hide"><?= $question_data['q6_opt_a'] ?></h3>
			<h3 id="q6_opt_b" class="hide"><?= $question_data['q6_opt_b'] ?></h3>
			<h3 id="q6_opt_c" class="hide"><?= $question_data['q6_opt_c'] ?></h3>
			<h3 id="q6_opt_d" class="hide"><?= $question_data['q6_opt_d'] ?></h3>
			<h3 id="q6_answer" class="hide"><?= $question_data['q6_answer'] ?></h3>

			<h3 id="q7" class="hide"><?= $question_data['q7'] ?></h3>
			<h3 id="q7_opt_a" class="hide"><?= $question_data['q7_opt_a'] ?></h3>
			<h3 id="q7_opt_b" class="hide"><?= $question_data['q7_opt_b'] ?></h3>
			<h3 id="q7_opt_c" class="hide"><?= $question_data['q7_opt_c'] ?></h3>
			<h3 id="q7_opt_d" class="hide"><?= $question_data['q7_opt_d'] ?></h3>
			<h3 id="q7_answer" class="hide"><?= $question_data['q7_answer'] ?></h3>

			<h3 id="q8" class="hide"><?= $question_data['q8'] ?></h3>
			<h3 id="q8_opt_a" class="hide"><?= $question_data['q8_opt_a'] ?></h3>
			<h3 id="q8_opt_b" class="hide"><?= $question_data['q8_opt_b'] ?></h3>
			<h3 id="q8_opt_c" class="hide"><?= $question_data['q8_opt_c'] ?></h3>
			<h3 id="q8_opt_d" class="hide"><?= $question_data['q8_opt_d'] ?></h3>
			<h3 id="q8_answer" class="hide"><?= $question_data['q8_answer'] ?></h3>

			<h3 id="q9" class="hide"><?= $question_data['q9'] ?></h3>
			<h3 id="q9_opt_a" class="hide"><?= $question_data['q9_opt_a'] ?></h3>
			<h3 id="q9_opt_b" class="hide"><?= $question_data['q9_opt_b'] ?></h3>
			<h3 id="q9_opt_c" class="hide"><?= $question_data['q9_opt_c'] ?></h3>
			<h3 id="q9_opt_d" class="hide"><?= $question_data['q9_opt_d'] ?></h3>
			<h3 id="q9_answer" class="hide"><?= $question_data['q9_answer'] ?></h3>

			<h3 id="q10" class="hide"><?= $question_data['q10'] ?></h3>
			<h3 id="q10_opt_a" class="hide"><?= $question_data['q10_opt_a'] ?></h3>
			<h3 id="q10_opt_b" class="hide"><?= $question_data['q10_opt_b'] ?></h3>
			<h3 id="q10_opt_c" class="hide"><?= $question_data['q10_opt_c'] ?></h3>
			<h3 id="q10_opt_d" class="hide"><?= $question_data['q10_opt_d'] ?></h3>
			<h3 id="q10_answer" class="hide"><?= $question_data['q10_answer'] ?></h3>


			<h3 id="question">Questions Goes here </h3>
			<div id="score_form">

				<!-- <h3 id="score">Score Goes here </h3> -->

			</div>
			<div id="answer-button">
				<button class="btn">Option 1</button>
				<button class="btn">Option 2</button>
				<button class="btn">Option 3</button>
				<button class="btn">Option 4</button>
			</div>
			<button id="next-btn">Next</button>
		</div>
	</div>

	<script src="./script.js"></script>
</body>

</html>