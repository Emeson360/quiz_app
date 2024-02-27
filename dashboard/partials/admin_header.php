<?php

require_once __DIR__ . '/../../config/database.php';

$admin_id = $_SESSION['eass_admin']['id'];

// Redirect if user is not logged in
if (!isAdminLoggedIn()) {
  redirect('admin_login.php');
}

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Admin | EASS CBT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/logo.png">

  <!-- jquery.vectormap css -->
  <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

  <!-- DataTables -->
  <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />


  <!-- Responsive datatable examples -->
  <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
</head>

<body data-topbar="dark" style="background-color: #3D5573;">

  <!-- <body data-layout="horizontal" data-topbar="dark"> -->

  <!-- Begin page -->
  <div id="layout-wrapper">


    <header id="page-topbar" style="background-color: #082B43;">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="index.php" class="logo logo-dark">
              <span class="logo-sm">
                <img src="assets/images/logo.png" alt="logo-sm" height="30">
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo.png" alt="logo-dark" height="42">
              </span>
            </a>

            <a href="index.php" class="logo logo-light">
              <span class="logo-sm">
                <img src="assets/images/logo.png" alt="logo-sm-light" height="30">
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo.png" alt="logo-light" height="42">
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="ri-menu-2-line align-middle"></i>
          </button>

          <!-- App Search-->
          <form class="app-search d-none d-lg-block">
            <div class="position-relative">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="ri-search-line"></span>
            </div>
          </form>


        </div>

        <div class="d-flex">

          <div class="dropdown d-inline-block d-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ri-search-line"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

              <form class="p-3">
                <div class="mb-3 m-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ...">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>


          <div class="dropdown d-lg-inline-block d-none ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
              <i class="ri-fullscreen-line"></i>
            </button>
          </div>

          <div class="dropdown d-inline-block user-dropdown">
            <?php
            $query_admin = mysqli_query($con, "SELECT * FROM admin WHERE id = $admin_id");
            if (mysqli_num_rows($query_admin) == 1) {
              $user_info = mysqli_fetch_assoc($query_admin);
              $username = $user_info["username"];
            }
            ?>
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="<?= ROOT_URL ?>dashboard/assets/images/users_avatar/user.png" alt="user-img" title="<?= $username ?>" class="rounded-circle header-profile-user p-1">
              <span class="d-none d-xl-inline-block ms-1"><?= $username ?></span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="<?= ROOT_URL ?>dashboard/profile.php"><i class="ri-admin-line align-middle me-1"></i> Profile</a>
              <a class="dropdown-item d-block" href="<?= ROOT_URL ?>dashboard/admin/activity.php"><span class="badge bg-success float-end mt-1">1</span><i class="ri-settings-2-line align-middle me-1"></i> Activities</a>
              <a class="dropdown-item" href="<?= ROOT_URL ?>dashboard/admin/change_password.php"><i class="ri-lock-unlock-line align-middle me-1"></i> Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="<?= ROOT_URL ?>dashboard/admin/logout.php?logout=1"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
              <i class="ri-settings-2-line"></i>
            </button>
          </div>

        </div>
      </div>
    </header>