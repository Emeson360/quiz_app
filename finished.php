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
			<?php
			$query_session_term = mysqli_query($con, "SELECT * FROM session_term");
			$session_term_data = mysqli_fetch_assoc($query_session_term);
			$session = $session_term_data['session'];
			$term = $session_term_data['term'];

			$student_id = $_SESSION['eass_user']['id'];
			$query_student = mysqli_query($con, "SELECT * FROM students WHERE id = '$student_id'");
			$student_data = mysqli_fetch_assoc($query_student);
			$class = $student_data['class'];
			$gen_class = rtrim($class, 'ABCDE');
			?>
			<h2><span>EASSE </span> CBT || <?= $session ?> (<?= $term ?> Test)</h2>

			<?php
			// dd($_SESSION['subject']);
			if (isset($_SESSION['subject'])) {
				
				$subject = $_SESSION['subject'];
				if($subject == 'English Language') {
					$subject_ = 'English_Language';
				}
				elseif($subject == 'Business Studies') {
					$subject_ = 'Business_Studies';
				}
				elseif($subject == 'Agric Science') {
					$subject_ = 'Agric_Science';
				}
				elseif($subject == 'Basic Science') {
					$subject_ = 'Basic_Science';
				}
				elseif($subject == 'Basic Technology') {
					$subject_ = 'Basic_Technology';
				}
				elseif($subject == 'French Language') {
					$subject_ = 'French_Language';
				}
				elseif($subject == 'Social Studies') {
					$subject_ = 'Social_Studies';
				}
				elseif($subject == 'Civic Education') {
					$subject_ = 'Civic_Education';
				}
				elseif($subject == 'Computer Studies') {
					$subject_ = 'Computer_Studies';
				}
				elseif($subject == 'Home Economics') {
					$subject_ = 'Home_Economics';
				}
				elseif($subject == 'Security Education') {
					$subject_ = 'Security_Education';
				}
				else {
					$subject_ = $_SESSION['subject'];
				}

			}
			?>

			<div class="flex">
				<h3>Subject: <?= $subject ?> </h3>
				<h3>Class: <?= $class ?> </h3>
				<h3>Session: <?= $session ?> </h3>
				<h3>Term: <?= $term ?> </h3>

			</div>
		</div>
		<div class="quiz">
			<?php


			

			$query_student = mysqli_query($con, "SELECT * FROM result WHERE student_id = '$student_id'");
			if (mysqli_num_rows($query_student) == 1) {
				$student_data = mysqli_fetch_assoc($query_student);

				$score = $student_data[$subject_];
			}
// dd($score);
			?>

			

			<h1>Exam is Over</h1>

			<h1>Score: <?= $score ?>/10</h1>

			<div style="display: flex; justify-content: center;">
				<a href="logout.php?nextSubject=1" onclick="clearLocalStorage()">Start Next Subject</a>
				<a href="logout.php?logout=1" onclick="clearLocalStorage()">Log Out</a>

			</div>


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