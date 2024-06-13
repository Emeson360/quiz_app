<?php
include_once __DIR__  . '/../../config/database.php';


if (isset($_POST['add_class'])) {
  $class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if (empty($class)) {
    session_n_redirect("add_class", "dashboard/add_class.php", "Class is required");
  } else {

    $query_class = mysqli_query($con, "SELECT * FROM classes");
    if (mysqli_num_rows($query_class) > 0) {
      foreach ($query_class as $key) {
        $db_class = $key['class'];


        $query_classes = mysqli_query($con, "SELECT * FROM classes WHERE class = '$class'");
        if (mysqli_num_rows($query_classes) == 1 && ($db_class == $class)) {
          session_n_redirect("add_class", "dashboard/add_class.php", "Class " . $class . " aready Exist");
        } else {
          // Insert Class to DB
          $insert_class = mysqli_query($con, "INSERT INTO classes (class) VALUES ('$class')");
          if ($insert_class) {
            session_n_redirect("add_class-success", "dashboard/add_class.php", "Class Added Successfully");
          } else {
            session_n_redirect("add_class", "dashboard/add_class.php", "Class insertion Error");
          }
        }
      }
    } else {
      // Insert Class to DB
      $insert_class = mysqli_query($con, "INSERT INTO classes (class) VALUES ('$class')");
      if ($insert_class) {
        session_n_redirect("add_class-success", "dashboard/add_class.php", "Class Added Successfully");
      } else {
        session_n_redirect("add_class", "dashboard/add_class.php", "Class insertion Error");
      }
    }
  }
} else {
  redirect('dashboard/add_class.php');
  die();
}
