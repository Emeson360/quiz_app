<?php
include_once __DIR__ . '/config/database.php';

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Class and Term | EASS CBT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesdesign" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/logo.png">

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
  <div class="bg-overlay"></div>
  <div class="wrapper-page">
    <div class="container-fluid p-0">
      <div class="card">
        <div class="card-body" style="background-color: #082b43;">

          <style>
            .auth-logo h2::first-letter {
              font-size: 40px;
              text-shadow: 3px 3px 1px #999;
            }
          </style>
          <div class="text-center mt-4">
            <div class="mb-3">
              <a href="index.php" class="auth-logo" style="color: #da5d1f;">
                <h2 style="color: #da5d1f;"><span><img src="assets/images/logo.png" alt=""></span><span>EASS</span></h2>
              </a>
            </div>
          </div>

          <h4 class="text-muted text-center font-size-18"><b>Class and Term</b></h4>

          <?php
          if (isset($_SESSION['login-success'])) {
            success_alert_unlimited($_SESSION['login-success']);
            unset($_SESSION['login-success']);
          }
          if (isset($_SESSION['class_session_term'])) {
            danger_alert_unlimited($_SESSION['class_session_term']);
            unset($_SESSION['class_session_term']);
          }
          ?>

          <div class="p-3">
            <form class="form-horizontal mt-3" method="post" action="<?= ROOT_URL ?>controllers/userControllers/class_session_term-logic.php">

              <div class="form-group mb-3 row">
                <div class="col-12">
                  <label for="validationCustom03" class="form-label text-white">Class</label>
                  <select class="form-select" id="validationCustom03" required name="class">
                    <option selected disabled value="">Choose Your Class</option>
                    <?php
                    $query_class = mysqli_query($con, "SELECT * FROM classes");
                    if (mysqli_num_rows($query_class) > 0) {
                      foreach ($query_class as $value) {
                        $class = $value['class'];
                    ?>
                        <option value="<?= $class ?>"><?= $class ?></option>

                      <?php
                      }
                    } else {
                      ?>
                      <option selected disabled  value="">No Class Available</option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <?php
              $query_session = mysqli_query($con, "SELECT * FROM session_term");
              if (mysqli_num_rows($query_session) == 1) {

              ?>

                <div class="form-group mb-3 text-center row mt-3 pt-1">
                  <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit" name="next">Next</button>
                  </div>
                </div>
              <?php

              } else {
              ?>
                <div class="col-12">
                  <p class="btn btn-danger w-100 waves-effect waves-light" type="button">
                    No Session and Term Set. Please inform the Admin!!!
                  </p>
                </div>
          </div>
        <?php
              }
        ?>



        </form>
        </div>
        <!-- end -->
      </div>
      <!-- end cardbody -->
    </div>
    <!-- end card -->
  </div>
  <!-- end container -->
  </div>
  <!-- end -->

  <!-- JAVASCRIPT -->
  <script src="assets/libs/jquery/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>

  <script src="assets/js/app.js"></script>

</body>

</html>