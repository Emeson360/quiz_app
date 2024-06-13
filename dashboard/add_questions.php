<?php

include_once __DIR__ . '/partials/admin_header.php';

?>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background-color: #082B43;">

	<div data-simplebar class="h-100">

		<!-- User details -->
		<div class="user-profile text-center mt-3">
			<div class="">
				<img src="<?= ROOT_URL ?>dashboard/assets/images/users_avatar/user.png" alt="user-img" title="<?= $username ?>" class="rounded-circle avatar-md">
			</div>
			<div class="mt-3">
				<h4 class="font-size-16 mb-1 text-white"><?= $username ?></h4>
				<span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
			</div>
		</div>

		<!--- Sidemenu -->
		<style>
			.current {
				border-right: 10px solid #fff;
				border-radius: 10px;
			}
		</style>
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu list-unstyled" id="side-menu">

				<li>
					<a href="index.php" class="waves-effect">
						<i class="ri-dashboard-line"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li class="current">
					<a href="add_questions.php" class="waves-effect">
						<i class="ri-file-add-line align-middle"></i>
						<span>Add Questions</span>
					</a>
				</li>

				<!-- Session / Term -->
				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="ri-file-add-line align-middle"></i>
						<span>Session/Term</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="add_session.php">Add Session</a></li>
						<li><a href="set_session_term.php">Set Session/Term</a></li>

					</ul>
				</li>

				<!-- Add Class -->
				<li>
					<a href="add_class.php" class="waves-effect">
						<i class="ri-file-add-line align-middle"></i>
						<span>Add Class</span>
					</a>
				</li>

				<!-- Choose subjects of the day -->
				<li>
					<a href="subject_of_the_day.php" class="waves-effect">
						<i class="ri-file-add-line align-middle"></i>
						<span>Subject of the Day</span>
					</a>
				</li>

				<!-- students -->
				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class=" ri-group-line"></i>
						<span>Students</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="students.php">All Students</a></li>
						<li><a href="add_student.php">Add Student</a></li>
						<li><a href="manage_students.php">Manage Students</a></li>

					</ul>
				</li>

				<li>
					<a href="view_grades.php" class=" waves-effect">
						<i class="ri-wallet-line align-middle"></i>
						<span>View Grades</span>
					</a>
				</li>

				<li>
					<a href="<?= ROOT_URL ?>dashboard/logout.php?logout=1" class=" waves-effect">
						<i class="ri-shut-down-line align-middle me-1 text-danger"></i>
						<span class="text-danger">Logout</span>
					</a>
				</li>


			</ul>
		</div>
		<!-- Sidebar -->
	</div>
</div>
<!-- Left Sidebar End -->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12 mb-3">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0 text-white">Dashboard</h4>

						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a class="text-white" href="javascript: void(0);">EASS</a></li>
								<li class="breadcrumb-item active text-white">Add Questions</li>
							</ol>
						</div>

					</div>
				</div>
			</div>
			<!-- end page title -->




			<div class="row">
				<div class="col-xl-11 col-md-6 mb-4 order-0 mx-auto">
					<div class="card" style="background-color: #082B43;">
						<div class="card-body">
							<div class="align-items-center row">
								<h2 class="mt-0 mb-3 col-md-12 text-white">Add Questions</h2>

								<?php
								if (isset($_SESSION['add_questions'])) {
									danger_alert_unlimited($_SESSION['add_questions']);
									unset($_SESSION['add_questions']);
								}
								if (isset($_SESSION['add_questions-success'])) {
									success_alert_unlimited($_SESSION['add_questions-success']);
									unset($_SESSION['add_questions-success']);
								}
								?>

								<div class="p-3">
									<form class="form-horizontal mt-3" method="post" action="<?= ROOT_URL ?>controllers/adminControllers/add_questions-logic.php">

										<div class="form-group mb-5 row">
											<div class="col-6 mb-1">
												<label class="text-white">Academic Session</label>
												<select class="form-select" id="validationCustom03" required name="session">
													<option selected disabled value="">Select Session</option>
													<?php
													$query_session = mysqli_query($con, "SELECT * FROM session");
													foreach ($query_session as $key) {
														$session = $key['session'];
													?>

														<option value="<?= $session ?>"><?= $session ?></option>
													<?php
													}
													?>
												</select>
											</div>

											<div class="col-6 mb-1">
												<label class="text-white">Term</label>
												<select class="form-select" id="validationCustom03" required name="term">
													<option selected disabled value="">Select Term</option>
													<?php
													$query_term = mysqli_query($con, "SELECT * FROM term");
													foreach ($query_term as $key) {
														$term = $key['term'];
													?>

														<option value="<?= $term ?>"><?= $term ?></option>
													<?php
													}
													?>
												</select>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-6 mb-1">
												<label class="text-white">Type of Exam</label>
												<select class="form-select" id="validationCustom03" required name="type">
													<option selected disabled value="">Select Type of Exam</option>
													<option value="test">Mid term Test</option>
													<option value="exam">Exam</option>
												</select>
											</div>

											<div class="col-6 mb-1">
												<label class="text-white">Class</label>
												<select class="form-select" id="validationCustom03" required name="class">
													<option selected disabled value="">Select Class</option>
													<option value="JSS1">JSS1</option>
													<option value="JSS2">JSS2</option>
												</select>
											</div>


										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Subject</label>
												<select class="form-select" id="validationCustom03" required name="subject">
													<option selected disabled value="">Choose Your Subject</option>
													<option value="English Language">English Language</option>
													<option value="Mathematics">Mathematics</option>
													<option value="Business Studies">Business Studies</option>
													<option value="Agric Science">Agric Science</option>
													<option value="Basic Science">Basic Science</option>
													<option value="Basic Technology">Basic Technology</option>
													<option value="CRS">CRS</option>
													<option value="Social Studies">Social Studies</option>
													<option value="History">History</option>
													<option value="Civic Education">Civic Education</option>
													<option value="Igbo">Igbo</option>
													<option value="Computer Studies">Computer Studies</option>
													<option value="French Language">French Language</option>
													<option value="CCA">Cultural & Creative Art</option>
													<option value="Home Economics">Home Economics</option>
													<option value="HPE">H.P.E</option>
													<option value="Security Education">Security Education</option>
												</select>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Instruction (optional)</label>
												<input class="form-control" type="text" name="instruction" placeholder="Instruction (optional)">
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 1</label>
												<input class="form-control" type="text" name="q1" placeholder="Question 1" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q1_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q1_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q1_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q1_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q1_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 2</label>
												<input class="form-control" type="text" name="q2" placeholder="Question 2" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q2_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q2_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q2_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q2_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q2_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 3</label>
												<input class="form-control" type="text" name="q3" placeholder="Question 3" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q3_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q3_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q3_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q3_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q3_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 4</label>
												<input class="form-control" type="text" name="q4" placeholder="Question 4" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q4_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q4_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q4_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q4_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q4_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 5</label>
												<input class="form-control" type="text" name="q5" placeholder="Question 5" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q5_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q5_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q5_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q5_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q5_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 6</label>
												<input class="form-control" type="text" name="q6" placeholder="Question 6" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q6_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q6_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q6_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q6_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q6_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 7</label>
												<input class="form-control" type="text" name="q7" placeholder="Question 7" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q7_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q7_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q7_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q7_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q7_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 8</label>
												<input class="form-control" type="text" name="q8" placeholder="Question 8" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q8_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q8_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q8_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q8_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q8_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 9</label>
												<input class="form-control" type="text" name="q9" placeholder="Question 9" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q9_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q9_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q9_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q9_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q9_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-5 row">
											<div class="col-12 mb-1">
												<label class="text-white">Question 10</label>
												<input class="form-control" type="text" name="q10" placeholder="Question 10" required>
											</div>

											<div class="col-2">
												<label class="text-white">Option A</label>
												<input class="form-control" type="text" name="q10_opt_a" placeholder="Option A" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option B</label>
												<input class="form-control" type="text" name="q10_opt_b" placeholder="Option B" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option C</label>
												<input class="form-control" type="text" name="q10_opt_c" placeholder="Option C" required>
											</div>
											<div class="col-2">
												<label class="text-white">Option D</label>
												<input class="form-control" type="text" name="q10_opt_d" placeholder="Option D" required>
											</div>
											<div class="col-4">
												<label class="text-white">Answer</label>
												<input class="form-control" type="text" name="q10_answer" placeholder="Answer" required>
											</div>
										</div>

										<div class="form-group mb-3 text-center row mt-3 pt-1">
											<div class="col-6 mx-auto">
												<button class="btn btn-info w-100 waves-effect waves-light" type="submit" name="add_questions">Submit</button>
											</div>
										</div>

									</form>
								</div>
								<!-- end -->
							</div>
						</div>
					</div>
				</div>


			</div>
			<!-- / Content -->


		</div>

	</div>
	<!-- End Page-content -->


	<!-- FOOTER -->
	<?php
	include_once __DIR__ . '/partials/footer.php';
	?>