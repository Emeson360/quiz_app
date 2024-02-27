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

				<!-- students -->
				<li class="mm-active">
					<a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class=" ri-group-line"></i>
						<span>Students</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="students.php">All Students</a></li>
						<li><a href="add_student.php">Add Student</a></li>
						<li class="current mm-active"><a href="manage_students.php">Manage Students</a></li>

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
								<li class="breadcrumb-item active text-white">Edit Student</li>
							</ol>
						</div>

					</div>
				</div>
			</div>
			<!-- end page title -->



			<div class="row">

				<!-- List of Students -->
				<div class="col-lg-6 mx-auto order-2 order-md-3 order-lg-2 mb-4">
					<div class="card" style="background-color: #082B43;">
						<div class="card-head px-5 py-3" style="background-color: #12659C;">
							<h4 class="fw-normal text-white">Edit Student Info</h4>
						</div>
						<div class="card-body p-0 px-3 py-3">

							<form class="form-horizontal mt-3" method="post" action="<?= ROOT_URL ?>controllers/adminControllers/add_edit_student-logic.php">

								<?php
								if (isset($_GET['reg_no'])) {
									$reg_no = $_GET['reg_no'];
								}
								$query_students = mysqli_query($con, "SELECT * FROM students WHERE reg_no = '$reg_no'");

								if (mysqli_num_rows($query_students) == 1) {
									foreach ($query_students as $student_data) {
										$id = $student_data['id'];
										$reg_no = $student_data['reg_no'];
										$fullname = $student_data['fullname'];
										$class = $student_data['class'];
									}
								}

								?>

								<input type="hidden" name="id" value="<?= $id ?>">

								<div class="form-group mb-3 row">
									<div class="col-12">
										<label for="validationCustom03" class="form-label text-white">Reg Number</label>
										<input class="form-control" type="text" name="reg_no" placeholder="Reg Number" value="<?= $reg_no ?>" required>
									</div>
								</div>

								<div class="form-group mb-3 row">
									<div class="col-12">
										<label for="validationCustom03" class="form-label text-white">Fullname</label>
										<input class="form-control" type="text" name="fullname" placeholder="Fullname" value="<?= $fullname ?>" required>
									</div>
								</div>

								<div class="form-group mb-3 row">
									<div class="col-12">
										<label for="validationCustom03" class="form-label text-white">Class</label>
										<select class="form-select" id="validationCustom03" required name="class">
											<option selected value="<?= $class ?>"><?= $class ?></option>
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
										</select>
									</div>
								</div>

								<div class="form-group mb-3 text-center row mt-3 pt-1">
									<div class="col-12">
										<button class="btn btn-info w-50 waves-effect waves-light" type="submit" name="edit">Update</button>
									</div>
								</div>

							</form>

						</div>
					</div>
				</div>

				<!--/ User Info -->

			</div>
			<!-- / Content -->



			<!--/ User Info -->

		</div>
		<!-- / Content -->

	</div>

</div>
<!-- End Page-content -->


<!-- FOOTER -->
<?php
include_once __DIR__ . '/partials/footer.php';
?>