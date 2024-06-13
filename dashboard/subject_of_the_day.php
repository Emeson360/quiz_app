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

				<li>
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
				<li class="current">
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
								<li class="breadcrumb-item active text-white">Set Subjects of the day</li>
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
								<h2 class="mt-0 mb-3 col-md-12 text-white">Set Subjects of the Day</h2>

								<?php
								if (isset($_SESSION['subject_of_the_day'])) {
									danger_alert_unlimited($_SESSION['subject_of_the_day']);
									unset($_SESSION['subject_of_the_day']);
								}
								if (isset($_SESSION['subject_of_the_day-success'])) {
									success_alert_unlimited($_SESSION['subject_of_the_day-success']);
									unset($_SESSION['subject_of_the_day-success']);
								}
								?>

								<div class="p-3">
									<form class="form-horizontal mt-3" method="post" action="<?= ROOT_URL ?>controllers/adminControllers/subject_of_the_day-logic.php">

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 1</label>
												<select class="form-select" id="validationCustom03" name="subject_1">
													<option selected disabled value="">Choose Subject 1</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 2</label>
												<select class="form-select" id="validationCustom03" name="subject_2">
													<option selected disabled value="">Choose Subject 2</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 3</label>
												<select class="form-select" id="validationCustom03" name="subject_3">
													<option selected disabled value="">Choose Subject 3</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 4</label>
												<select class="form-select" id="validationCustom03" name="subject_4">
													<option selected disabled value="">Choose Subject 4</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 5</label>
												<select class="form-select" id="validationCustom03" name="subject_5">
													<option selected disabled value="">Choose Subject 5</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 6</label>
												<select class="form-select" id="validationCustom03" name="subject_6">
													<option selected disabled value="">Choose Subject 6</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 7</label>
												<select class="form-select" id="validationCustom03" name="subject_7">
													<option selected disabled value="">Choose Subject 7</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 8</label>
												<select class="form-select" id="validationCustom03" name="subject_8">
													<option selected disabled value="">Choose Subject 8</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 9</label>
												<select class="form-select" id="validationCustom03" name="subject_9">
													<option selected disabled value="">Choose Subject 9</option>
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

										<div class="form-group mb-2 row">
											<div class="col-8 mx-auto mb-1">
												<label class="text-white">Subject 10</label>
												<select class="form-select" id="validationCustom03" name="subject_10">
													<option selected disabled value="">Choose Subject 10</option>
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


									<div class="form-group mb-3 text-center row mt-3 pt-1">
										<div class="col-6 mx-auto">
											<button class="btn btn-info w-75 waves-effect waves-light" type="submit" name="set_subj_of_the_day">Submit</button>
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