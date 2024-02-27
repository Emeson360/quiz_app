<?php
include_once __DIR__ . '/../../config/database.php';



if (isset($_POST['add'])) {
  $reg_no = filter_var($_POST['reg_no'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Validation
  if (empty($reg_no)) {
    session_n_redirect("edit_student", "dashboard/manage_students.php", "Reg Number Required");
  } elseif (empty($fullname)) {
    session_n_redirect("edit_student", "dashboard/manage_students.php", "Fullname Required");
  } elseif (empty($class)) {
    session_n_redirect("edit_student", "dashboard/manage_students.php", "Class Required");
  } else {

    // check if reg no already exist in database
    $reg_no_check_query = "SELECT reg_no FROM students WHERE reg_no = '$reg_no'";
    $reg_no_check_result = mysqli_query($con, $reg_no_check_query);

// dd(mysqli_num_rows($reg_no_check_result));
    if (mysqli_num_rows($reg_no_check_result) > 0) {
      session_n_redirect("edit_student", "dashboard/manage_students.php", "Reg Number already exist");
    } else {
    }

    $add_student = mysqli_query($con, "INSERT INTO students (reg_no, fullname, class) VALUES('$reg_no', '$fullname', '$class')");

    if ($add_student) {
      session_n_redirect("edit_student-success", "dashboard/manage_students.php", "Student added successfully");
    } else {
      session_n_redirect("edit_student", "dashboard/manage_students.php", "Failed to Add student");
    }
  }
} elseif (isset($_POST['edit'])) {
  $id = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $reg_no = filter_var($_POST['reg_no'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if (empty($reg_no)) {
    session_n_redirect("edit_student", "dashboard/manage_students.php", "Reg Number Required");
  } elseif (empty($fullname)) {
    session_n_redirect("edit_student", "dashboard/manage_students.php", "Fullname Required");
  } elseif (empty($class)) {
    session_n_redirect("edit_student", "dashboard/manage_students.php", "Class Required");
  } else {

    $update_student_info = mysqli_query($con, "UPDATE students SET reg_no = '$reg_no', fullname = '$fullname', class = '$class' WHERE id = '$id'");

    if ($update_student_info) {
      session_n_redirect("edit_student-success", "dashboard/manage_students.php", "Student Info Updated successfully");
    } else {
      session_n_redirect("edit_student", "dashboard/manage_students.php", "Failed to Update student info");
    }
  }
} else {
  redirect("edit_student.php");
}
