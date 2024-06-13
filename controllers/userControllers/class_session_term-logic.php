<?php
include_once __DIR__ . '/../../config/database.php';


if (isset($_POST['next'])) {
  $student_id = $_SESSION['eass_user']['id'];
  $class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// dd($class);

  // Validation
  if (empty($class)) {
    session_n_redirect("class_session_term", "class_session_term.php", "Please Select your Class");
  } else {

    $query_student = mysqli_query($con, "SELECT * FROM students WHERE id = '$student_id'");
    if (mysqli_num_rows($query_student) == 1) {
      foreach ($query_student as $key) {
        $db_class = $key['class'];
      }

      if($db_class != $class) {
        session_n_redirect("class_session_term", "class_session_term.php", "Please choose your correct class");
      }
      else{
        $_SESSION['class'] = $class;
    
        redirect("subject.php");
      }
    } else {
      session_n_redirect("login", "index.php", "Please Login with your Reg No");
    }


  }
} else {
  redirect("class_session_term.php");
}
