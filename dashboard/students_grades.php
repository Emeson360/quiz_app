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

				<li class="current mm-active">
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
								<li class="breadcrumb-item active text-white">Students Grades</li>
							</ol>
						</div>

					</div>
				</div>
			</div>
			<!-- end page title -->



			<div class="row">

				<!-- List of Students -->
				<div class="col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
					<div class="card" style="background-color: #082B43;">
						<div class="card-head px-5 py-3" style="background-color: #12659C;">
							<h4 class="fw-normal text-white">Students Grades</h4>
						</div>
						<div class="card-body p-0 px-3 py-3">

							<?php
							if (isset($_POST['view'])) {
								$class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
								$session = filter_var($_POST['session'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
								$term = filter_var($_POST['term'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
							} else {
								redirect("view_grades.php");
							}
							?>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Reg No</th>
										<th>Full Name</th>
										<th>Class</th>
										<th>English Language</th>
										<th>Mathematics</th>
										<th>Business Studies</th>
										<th>Agric Science</th>
										<th>Basic Science</th>
										<th>Basic Technology</th>
										<th>CRS</th>
										<th>Social Studies</th>
										<th>History</th>
										<th>Civic Education</th>
										<th>Igbo</th>
										<th>Computer Studies</th>
										<th>French Language</th>
										<th>CCA</th>
										<th>Home Economics</th>
										<th>HPE</th>
										<th>Security Education</th>
									</tr>
								</thead>


								<tbody>
									<?php
									$query_students_result = mysqli_query($con, "SELECT * FROM result WHERE class = '$class' AND (session = '$session' AND term = '$term')");

									
									?>
									<?php if (mysqli_num_rows($query_students_result) > 0) : ?>
										<?php
										$sn = 1;
										foreach ($query_students_result as $student_data) {
											$student_id = $student_data['student_id'];
											$fullname = $student_data['fullname'];
											$English_Language = $student_data['English_Language'];
											$Mathematics = $student_data['Mathematics'];
											$Business_Studies = $student_data['Business_Studies'];
											$Agric_Science = $student_data['Agric_Science'];
											$Basic_Science = $student_data['Basic_Science'];
											$Basic_Technology = $student_data['Basic_Technology'];
											$CRS = $student_data['CRS'];
											$Social_Studies = $student_data['Social_Studies'];
											$History = $student_data['History'];
											$Civic_Education = $student_data['Civic_Education'];
											$Igbo = $student_data['Igbo'];
											$Computer_Studies = $student_data['Computer_Studies'];
											$French_Language = $student_data['French_Language'];
											$CCA = $student_data['CCA'];
											$Home_Economics = $student_data['Home_Economics'];
											$HPE = $student_data['HPE'];
											$Security_Education = $student_data['Security_Education'];
											
											$query_students = mysqli_query($con, "SELECT * FROM students WHERE id = '$student_id'");
											foreach ($query_students as $student_main_data) {
												
												$reg_no = $student_main_data['reg_no'];
											}
											?>
											<tr>
												<td><?= $sn++; ?></td>
												<td><?= $reg_no; ?></td>
												<td><?= $fullname; ?></td>
												<td><?= $class; ?></td>
												<td><?= $English_Language; ?></td>
												<td><?= $Mathematics; ?></td>
												<td><?= $Business_Studies; ?></td>
												<td><?= $Agric_Science; ?></td>
												<td><?= $Basic_Science; ?></td>
												<td><?= $Basic_Technology; ?></td>
												<td><?= $CRS; ?></td>
												<td><?= $Social_Studies; ?></td>
												<td><?= $History; ?></td>
												<td><?= $Civic_Education; ?></td>
												<td><?= $Igbo; ?></td>
												<td><?= $Computer_Studies; ?></td>
												<td><?= $French_Language; ?></td>
												<td><?= $CCA; ?></td>
												<td><?= $Home_Economics; ?></td>
												<td><?= $HPE; ?></td>
												<td><?= $Security_Education; ?></td>
											</tr>
										<?php
										}
										?>


									<?php else : ?>

										<tr>
											<td colspan="6">
												<div class="alert alert-danger">
													<strong>No Grades</strong> yet.
												</div>
											</td>
										</tr>
									<?php endif ?>



								</tbody>
							</table>
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