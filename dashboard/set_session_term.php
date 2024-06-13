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
						<li class="current"><a href="set_session_term.php">Set Session/Term</a></li>

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
								<li class="breadcrumb-item active text-white">Set Academic Session/Term</li>
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
								<h2 class="mt-0 mb-3 col-md-12 text-white">Set Academic Session/Term</h2>

								<?php
								if (isset($_SESSION['set_session_term'])) {
									danger_alert_unlimited($_SESSION['set_session_term']);
									unset($_SESSION['set_session_term']);
								}
								if (isset($_SESSION['set_session_term-success'])) {
									success_alert_unlimited($_SESSION['set_session_term-success']);
									unset($_SESSION['set_session_term-success']);
								}
								?>

								<div class="p-3">
									<form class="form-horizontal mt-3" method="post" action="<?= ROOT_URL ?>controllers/adminControllers/set_session_term-logic.php">

										<div class="form-group mb-2 row">
											<div class="col-10 mx-auto mb-1">
												<label class="text-white">Academic Session</label>
												<select class="form-select" id="validationCustom03" required name="session">
													<option selected disabled value="">Select Session</option>
													<?php
													$query_session = mysqli_query($con, "SELECT * FROM session");
													if (mysqli_num_rows($query_session) > 0) {
														foreach ($query_session as $key) {
															$session = $key['session'];
													?>
															<option value="<?= $session ?>"><?= $session ?></option>
														<?php
														}
														?>
												</select>

											</div>

										</div>
									<?php
													} else {
									?>

										<div>
											<h4 class="text-danger">No Session Added</h4>
										</div>

									<?php
													}
									?>

									<div class="form-group mb-2 row">
										<div class="col-10 mx-auto mb-1">
											<label class="text-white">Academic Term</label>
											<select class="form-select" id="validationCustom03" required name="term">
												<option selected disabled value="">Select Term</option>
												<?php
												$query_term = mysqli_query($con, "SELECT * FROM term");
												if (mysqli_num_rows($query_term) > 0) {
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
								<?php
												}
								?>


								<div class="form-group mb-3 text-center row mt-3 pt-1">
									<div class="col-6 mx-auto">
										<button class="btn btn-info w-75 waves-effect waves-light" type="submit" name="set_session_term">Submit</button>
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