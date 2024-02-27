<?php
include_once __DIR__ . '/config/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exam is Over | EASS CBT</title>
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/logo.png">

	<link rel="stylesheet" href="styles.css">

	<style>
		h1 {
			text-align: center;
			background-color: #082B43;
			color: white;
			padding: 10px;
			border-radius: 7px;
			margin-bottom: 20px;
		}
		a {
			text-align: center;
			background-color: #082B43;
			color: white;
			text-decoration: none;
			padding: 10px;
			border-radius: 7px;
			display: inline-block;
			margin: 20px auto;
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
					$subject = 'Computer_Studies';
				} elseif ($_SESSION['subject'] == 'French_Language') {
					$subject = 'French_Language';
				} elseif ($_SESSION['subject'] == 'Home_Economics') {
					$subject = 'Home_Economics';
				} elseif ($_SESSION['subject'] == 'Security_Education') {
					$subject = 'Security_Education';
				} else {
					$subject = $_SESSION['subject'];
				}
			}
			?>

			<div class="flex">
				<h3>Subject: <?= $subject ?> </h3>
				<h3>Class: <?= $class ?> </h3>

			</div>
		</div>
		<div class="quiz">
			<?php

			$class_ = $_SESSION['class'];
			$subject_ = $_SESSION['subject'];
			$reg_no = $_SESSION['eass_user']['reg_no'];
			$query_student = mysqli_query($con, "SELECT * FROM students WHERE reg_no = '$reg_no'");
			if (mysqli_num_rows($query_student) == 1) {
				$student_data = mysqli_fetch_assoc($query_student);

				$score = $student_data[$subject_];
			}

			?>

			<h1>Exam is Over</h1>

			<h1>Score: <?= $score ?>/10</h1>

			<a href="logout.php?logout=1" onclick="clearLocalStorage()">Log Out</a>

		</div>
	</div>

	<script>
		function clearLocalStorage() {
			localStorage.clear();
		}
	</script>

	<script src="./script.js"></script>
</body>

</html>