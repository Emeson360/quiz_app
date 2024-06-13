<?php
include_once __DIR__ . '/../../config/database.php';


if (isset($_POST['login'])) {
  $reg_no = filter_var($_POST['reg_no'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


  // Validation
  if (empty($reg_no)) {
    session_n_redirect("login", "index.php", "Reg Number Required");
  } else {

    // fetch user from database
    $fetch_user_query = "SELECT * FROM students WHERE reg_no = '$reg_no'";
    $fetch_user_result = mysqli_query($con, $fetch_user_query);


    if (mysqli_num_rows($fetch_user_result)  == 1) {
      // convert the record to an associative array
      $user_record = mysqli_fetch_assoc($fetch_user_result);

      // set session for access control           
      $_SESSION['eass_user'] = $user_record;
      $fullname = $_SESSION['eass_user']['fullname'];

      session_n_redirect("login-success", "subject.php", $fullname);
    } else {
      session_n_redirect("login", "index.php", "Incorrect Reg Number");
    }
  }

} else {
  redirect("index.php");
}
