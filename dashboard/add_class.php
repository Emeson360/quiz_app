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
				<li class="current">
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
								<li class="breadcrumb-item active text-white">Add Class</li>
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
								<h2 class="mt-0 mb-3 col-md-12 text-white">Add Class</h2>

								<?php
								if (isset($_SESSION['add_class'])) {
									danger_alert_unlimited($_SESSION['add_class']);
									unset($_SESSION['add_class']);
								}
								if (isset($_SESSION['add_class-success'])) {
									success_alert_unlimited($_SESSION['add_class-success']);
									unset($_SESSION['add_class-success']);
								}
								?>

								<div class="p-3">
									<form class="form-horizontal mt-3" method="post" action="<?= ROOT_URL ?>controllers/adminControllers/add_class-logic.php">

										<div class="form-group mb-5 row">
											<div class="col-10 mx-auto mb-1">
												<label class="text-white">Classes</label>
												<select class="form-select" id="validationCustom03" required name="class">
													<option selected disabled value="">Select Class</option>
													<option value="JSS1A">JSS1A</option>
													<option value="JSS1B">JSS1B</option>
													<option value="JSS1C">JSS1C</option>
													<option value="JSS1D">JSS1D</option>
													<option value="JSS1E">JSS1E</option>
													<option value="JSS2A">JSS2A</option>
													<option value="JSS2B">JSS2B</option>
													<option value="JSS2C">JSS2C</option>
													<option value="JSS2D">JSS2D</option>
													<option value="JSS2E">JSS2E</option>
													<option value="JSS3A">JSS3A</option>
													<option value="JSS3B">JSS3B</option>
													<option value="JSS3C">JSS3C</option>
													<option value="JSS3D">JSS3D</option>
													<option value="JSS3E">JSS3E</option>
													<option value="SS1A">SS1A</option>
													<option value="SS1B">SS1B</option>
													<option value="SS1C">SS1C</option>
													<option value="SS1D">SS1D</option>
													<option value="SS1E">SS1E</option>
													<option value="SS2A">SS2A</option>
													<option value="SS2B">SS2B</option>
													<option value="SS2C">SS2C</option>
													<option value="SS2D">SS2D</option>
													<option value="SS2E">SS2E</option>
													<option value="SS3A">SS3A</option>
													<option value="SS3B">SS3B</option>
													<option value="SS3C">SS3C</option>
													<option value="SS3D">SS3D</option>
													<option value="SS3E">SS3E</option>
												</select>
											</div>

										</div>

										<div class="form-group mb-3 text-center row mt-3 pt-1">
											<div class="col-6 mx-auto">
												<button class="btn btn-info w-75 waves-effect waves-light" type="submit" name="add_class">Submit</button>
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