<?php
include_once __DIR__  . '/../../config/database.php';


if (isset($_POST['set_session_term'])) {
  $session = filter_var($_POST['session'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $term = filter_var($_POST['term'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if (empty($session)) {
    session_n_redirect("set_session_term", "dashboard/set_session_term.php", "Session is required");
  } elseif (empty($term)) {
    session_n_redirect("set_session_term", "dashboard/set_session_term.php", "Term is required");
  } else {

    $query_session_term = mysqli_query($con, "SELECT * FROM session_term");
    if (mysqli_num_rows($query_session_term) == 1) {

      // Update Session/Term
      $update_session_term = mysqli_query($con, "UPDATE session_term SET session = '$session', term = '$term'");
      if ($update_session_term) {
        session_n_redirect("set_session_term-success", "dashboard/set_session_term.php", "Session and Term was Successfully updated");
      } else {
        session_n_redirect("set_session_term", "dashboard/set_session_term.php", "Session and Term Update Error");
      }
    } else {

      // Insert Session/Term
      $insert_session_term = mysqli_query($con, "INSERT INTO session_term (session, term) VALUES('$session','$term')");
      if ($insert_session_term) {
        session_n_redirect("set_session_term-success", "dashboard/set_session_term.php", "Session and Term Successfully Added");
      } else {
        session_n_redirect("set_session_term", "dashboard/set_session_term.php", "Session and Term Insertion Error");
      }
    }
  }
} else {
  redirect('dashboard/set_session_term.php');
  die();
}
