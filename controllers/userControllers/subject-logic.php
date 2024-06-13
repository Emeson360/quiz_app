<?php
include_once __DIR__ . '/../../config/database.php';


if (isset($_POST['start'])) {

  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Validation
  if (empty($subject)) {
    session_n_redirect("subject_alert", "subject.php", "Please Select a Subject");
  } else {
    $student_id = $_SESSION['eass_user']['id'];

    $query_student = mysqli_query($con, "SELECT * FROM result WHERE student_id = '$student_id' AND (session = '$session' and term = '$term')");

    if (mysqli_num_rows($query_student) == 1) {
      foreach ($query_student as $value) {
        $English_Language = $value['English_Language'];
        $Mathematics = $value['Mathematics'];
        $Business_Studies = $value['Business_Studies'];
        $Agric_Science = $value['Agric_Science'];
        $Basic_Science = $value['Basic_Science'];
        $Basic_Technology = $value['Basic_Technology'];
        $CRS = $value['CRS'];
        $Social_Studies = $value['Social_Studies'];
        $History = $value['History'];
        $Civic_Education = $value['Civic_Education'];
        $Igbo = $value['Igbo'];
        $Computer_Studies = $value['Computer_Studies'];
        $French_Language = $value['French_Language'];
        $CCA = $value['CCA'];
        $Home_Economics = $value['Home_Economics'];
        $HPE = $value['HPE'];
        $Security_Education = $value['Security_Education'];
        if ($subject == 'English Language' && $English_Language != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written English. Please select another subject you have today");
        } elseif ($subject == 'Mathematics' && $Mathematics != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Mathematics. Please select another subject you have today");
        } elseif ($subject == 'Business Studies' && $Business_Studies != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Business Studies. Please select another subject you have today");
        } elseif ($subject == 'Agric Science' && $Agric_Science != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Agric Science. Please select another subject you have today");
        } elseif ($subject == 'Basic Science' && $Basic_Science != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Basic Science. Please select another subject you have today");
        } elseif ($subject == 'Basic Technology' && $Basic_Technology != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Basic Technology. Please select another subject you have today");
        } elseif ($subject == 'CRS' && $CRS != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written CRS. Please select another subject you have today");
        } elseif ($subject == 'Social Studies' && $Social_Studies != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Social Studies. Please select another subject you have today");
        } elseif ($subject == 'History' && $History != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written History. Please select another subject you have today");
        } elseif ($subject == 'Civic Education' && $Civic_Education != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Civic Education. Please select another subject you have today");
        } elseif ($subject == 'Igbo' && $Igbo != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Igbo. Please select another subject you have today");
        } elseif ($subject == 'Computer Studies' && $Computer_Studies != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Computer Studies. Please select another subject you have today");
        } elseif ($subject == 'French Language' && $French_Language != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written French Language. Please select another subject you have today");
        } elseif ($subject == 'CCA' && $CCA != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written CCA. Please select another subject you have today");
        } elseif ($subject == 'Home Economics' && $Home_Economics != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Home Economics. Please select another subject you have today");
        } elseif ($subject == 'HPE' && $HPE != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written HPE. Please select another subject you have today");
        } elseif ($subject == 'Security Education' && $Security_Education != '') {
          session_n_redirect("subject_alert", "subject.php", "You have written Security Education. Please select another subject you have today");
        } else {

          $_SESSION['subject'] = $subject;
          redirect("cbt.php");
        }
      }
    } else {

      $_SESSION['subject'] = $subject;
      redirect("cbt.php");
    }
  }
} else {
  redirect("subject.php");
}
