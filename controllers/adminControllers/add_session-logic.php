<?php
include_once __DIR__  . '/../../config/database.php';


if (isset($_POST['add_session'])) {
  $session = filter_var($_POST['session'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if (empty($session)) {
    session_n_redirect("add_session", "dashboard/add_session.php", "Session is required");
  } else {

    // Insert Session to DB
    $insert_session = mysqli_query($con, "INSERT INTO session (session) VALUES ('$session')");
    if ($insert_session) {
      session_n_redirect("add_session-success", "dashboard/add_session.php", "Session Added Successfully");
    } else {
      session_n_redirect("add_session", "dashboard/add_session.php", "Session insertion Error");
    }
  }
} else {
  redirect('dashboard/add_session.php');
  die();
}
