<?php

include_once __DIR__ . '/partials/admin_header.php';

// students
$query_students = "SELECT * FROM students";
$result_students = mysqli_query($con, $query_students);
$student_count = mysqli_num_rows($result_students);

// // Pending deposits
// $query_deposit_pending = mysqli_query($con, "SELECT * FROM deposit WHERE status = 'Pending'");
// $pending_depo_count = mysqli_num_rows($query_deposit_pending);

// // Active deposits
// $query_deposit_active = mysqli_query($con, "SELECT * FROM deposit WHERE status = 'Active'");
// $active_depo_count = mysqli_num_rows($query_deposit_active);


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

				<li class="current">
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
								<li class="breadcrumb-item active text-white">Dashboard</li>
							</ol>
						</div>

					</div>
				</div>
			</div>
			<!-- end page title -->




			<div class="row">
				<div class="col-xl-3 col-md-6 mb-4 order-0">
					<div class="card" style="background-color: #082B43;">
						<div class="card-body">
							<div class="align-items-center row">
								<h6 class="card-title mt-0 mb-3 col-md-12 text-white">Students</h6>
								<div class="col-md-3">
									<span class="badge rounded-pill bg-primary" style="font-size: 15px; padding: 3px 8px;">
										10
										<i class="bx bx-trending-up"></i>
									</span>

								</div>
								<div class="col-md-9 text-center text-sm-left">
									<div class="card-body pb-0 px-0 px-md-4">
										<h4 class="font-weight-normal mb-1 text-white"><?= $student_count ?></h4>
										<p class="text-muted mb-3" style="font-size: 12px;">All Students</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-4 order-0">
					<div class="card" style="background-color: #082B43;">
						<div class="card-body">
							<div class="align-items-center row">
								<h6 class="card-title mt-0 mb-3 col-md-12 text-white">Lorem Ipsum</h6>
								<div class="col-md-3">
									<span class="badge rounded-pill bg-danger" style="font-size: 15px; padding: 3px 8px;">
										20
										<i class="bx bx-trending-up"></i>
									</span>

								</div>
								<div class="col-md-9 text-center text-sm-left">
									<div class="card-body pb-0 px-0 px-md-4">
										<h4 class="font-weight-normal mb-1 text-white"> 4 </h4>
										<p class="text-muted mb-3" style="font-size: 12px;">All Lorem Ipsums</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-4 order-0">

					<div class="card" style="background-color: #082B43;">
						<div class="card-body">
							<div class="align-items-center row">
								<h6 class="card-title mt-0 mb-3 col-md-12 text-white">Lorem Ipsum</h6>
								<div class="col-md-3">
									<span class="badge rounded-pill bg-warning" style="font-size: 15px; padding: 3px 8px;">
										30
										<i class="bx bx-trending-up"></i>
									</span>

								</div>
								<div class="col-md-9 text-center text-sm-left">
									<div class="card-body pb-0 px-0 px-md-4">
										<h4 class="font-weight-normal mb-1 text-white"> 4 </h4>
										<p class="text-muted mb-3" style="font-size: 12px;">All Lorem Ipsums</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-4 order-0">
					<div class="card" style="background-color: #082B43;">
						<div class="card-body">
							<div class="align-items-center row">
								<h6 class="card-title mt-0 mb-3 col-md-12 text-white">Lorem Ipsum</h6>
								<div class="col-md-3">
									<span class="badge rounded-pill bg-success" style="font-size: 15px; padding: 3px 8px;">
										40
										<i class="bx bx-trending-up"></i>
									</span>

								</div>
								<div class="col-md-9 text-center text-sm-left">
									<div class="card-body pb-0 px-0 px-md-4">
										<h4 class="font-weight-normal mb-1 text-white"> 9 </h4>
										<p class="text-muted mb-3" style="font-size: 12px;">All Lorem Ipsum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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