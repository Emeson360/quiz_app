<?php
include_once __DIR__  . '/../../config/database.php';


if (isset($_POST['set_subj_of_the_day'])) {
  $subject_1 = filter_var($_POST['subject_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_2 = filter_var($_POST['subject_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_3 = filter_var($_POST['subject_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_4 = filter_var($_POST['subject_4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_5 = filter_var($_POST['subject_5'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_6 = filter_var($_POST['subject_6'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_7 = filter_var($_POST['subject_7'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_8 = filter_var($_POST['subject_8'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_9 = filter_var($_POST['subject_9'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject_10 = filter_var($_POST['subject_10'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // if($subject_1 != '' && ($subject_1 == ($subject_2 || $subject_3 || $subject_4 || $subject_5 || $subject_6 || $subject_7 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_2 != '' && ($subject_2 == ($subject_1 || $subject_3 || $subject_4 || $subject_5 || $subject_6 || $subject_7 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_3 != '' && ($subject_3 == ($subject_1 || $subject_2 || $subject_4 || $subject_5 || $subject_6 || $subject_7 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_4 != '' && ($subject_4 == ($subject_1 || $subject_2 || $subject_3 || $subject_5 || $subject_6 || $subject_7 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_5 != '' && ($subject_5 == ($subject_1 || $subject_2 || $subject_3 || $subject_4 || $subject_6 || $subject_7 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_6 != '' && ($subject_6 == ($subject_1 || $subject_2 || $subject_3 || $subject_4 || $subject_5 || $subject_7 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_7 != '' && ($subject_7 == ($subject_1 || $subject_2 || $subject_3 || $subject_4 || $subject_5 || $subject_6 || $subject_8 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_8 != '' && ($subject_8 == ($subject_1 || $subject_2 || $subject_3 || $subject_4 || $subject_5 || $subject_6 || $subject_7 || $subject_9 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_9 != '' && ($subject_9 == ($subject_1 || $subject_2 || $subject_3 || $subject_4 || $subject_5 || $subject_6 || $subject_7 || $subject_8 || $subject_10))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // elseif($subject_10 != '' && ($subject_10 == ($subject_1 || $subject_2 || $subject_3 || $subject_4 || $subject_5 || $subject_6 || $subject_7 || $subject_8 || $subject_9))) {
  //   session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject Duplicate");
  // }
  // else {



      // Update subject_of_the_day
      $update_subject_1 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_1' WHERE title = 'subject_1'");

      if ($update_subject_1) {
        
        $update_subject_2 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_2' WHERE title = 'subject_2'");
        if ($update_subject_2) {
        
          $update_subject_3 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_3' WHERE title = 'subject_3'");
        }
        if ($update_subject_3) {

          $update_subject_4 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_4' WHERE title = 'subject_4'");
        }
        if ($update_subject_4) {

          $update_subject_5 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_5' WHERE title = 'subject_5'");
        }
        if ($update_subject_5) {
          
          $update_subject_6 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_6' WHERE title = 'subject_6'");
        }
        if ($update_subject_6) {

          $update_subject_7 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_7' WHERE title = 'subject_7'");
        }
        if ($update_subject_7) {

          $update_subject_8 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_8' WHERE title = 'subject_8'");
        }
        if ($update_subject_8) {

          $update_subject_9 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_9' WHERE title = 'subject_9'");
        }
        if ($update_subject_9) {

          $update_subject_10 = mysqli_query($con, "UPDATE subject_of_the_day SET subject = '$subject_10' WHERE title = 'subject_10'");
        }
        if ($update_subject_10) {
          session_n_redirect("subject_of_the_day-success", "dashboard/subject_of_the_day.php", "Subject of the day was Successfully updated");
        }
      }
      else {
        session_n_redirect("subject_of_the_day", "dashboard/subject_of_the_day.php", "Subject of the day Update Error");
      }
    
  // }


} else {
  redirect('dashboard/subject_of_the_day.php');
  die();
}
