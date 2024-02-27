<?php
include_once __DIR__  . '/../../config/database.php';


if (isset($_POST['login'])) {
  $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


  // Capatcha validation
  if (empty($username)) {
    session_n_redirect("login", "admin_login.php", "Username Required");
  } elseif (empty($password)) {
    session_n_redirect("login", "admin_login.php", "Password Required");
  } else {

    // fetch user from database
    $fetch_user_query = "SELECT * FROM admin WHERE username = '$username'";
    $fetch_user_result = mysqli_query($con, $fetch_user_query);


    if (mysqli_num_rows($fetch_user_result)  == 1) {
      // convert the record to an associative array
      $user_record = mysqli_fetch_assoc($fetch_user_result);
      $db_password = $user_record['password'];

      // compare password with db_password
      if (password_verify($password, $db_password)) {

        // set session for access control           
        $_SESSION['eass_admin'] = $user_record;
        redirect('dashboard/');

      } else {
        $_SESSION['login'] = "Incorrect password";
      }
    } else {
      $_SESSION['login'] = 'Incorrect Username';
    }
  }


  // If there is any error, redirect to register page
  if (isset($_SESSION['login'])) {
    $_SESSION['login-data'] = $_POST;
    redirect('admin_login.php');
    die();
  }
} else {
  redirect('admin_login.php');
  die();
}
