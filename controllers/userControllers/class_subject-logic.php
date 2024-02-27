<?php
include_once __DIR__ . '/../../config/database.php';


if (isset($_POST['start'])) {
  $class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Validation
  if (empty($class)) {
    session_n_redirect("class_subject", "class_subject.php", "Please Select your Class");
  } elseif (empty($subject)) {
    session_n_redirect("class_subject", "class_subject.php", "Please Select a Subject");
  } else {
    $student_id = $_SESSION['eass_user']['id'];

    $query_student = mysqli_query($con, "SELECT * FROM students WHERE id = '$student_id'");
    // dd($subject);
    if(mysqli_num_rows($query_student) == 1) {
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
        if($subject == 'English_Language' && $English_Language != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written English. Please select another subject you have today");
        }
        elseif($subject == 'Mathematics' && $Mathematics != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Mathematics. Please select another subject you have today");
        }
        elseif($subject == 'Business_Studies' && $Business_Studies != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Business Studies. Please select another subject you have today");
        }
        elseif($subject == 'Agric_Science' && $Agric_Science != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Agric Science. Please select another subject you have today");
        }
        elseif($subject == 'Basic_Science' && $Basic_Science != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Basic Science. Please select another subject you have today");
        }
        elseif($subject == 'Basic_Technology' && $Basic_Technology != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Basic Technology. Please select another subject you have today");
        }
        elseif($subject == 'CRS' && $CRS != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written CRS. Please select another subject you have today");
        }
        elseif($subject == 'Social_Studies' && $Social_Studies != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Social Studies. Please select another subject you have today");
        }
        elseif($subject == 'History' && $History != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written History. Please select another subject you have today");
        }
        elseif($subject == 'Civic_Education' && $Civic_Education != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Civic Education. Please select another subject you have today");
        }
        elseif($subject == 'Igbo' && $Igbo != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Igbo. Please select another subject you have today");
        }
        elseif($subject == 'Computer_Studies' && $Computer_Studies != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Computer Studies. Please select another subject you have today");
        }
        elseif($subject == 'French_Language' && $French_Language != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written French Language. Please select another subject you have today");
        }
        elseif($subject == 'CCA' && $CCA != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written CCA. Please select another subject you have today");
        }
        elseif($subject == 'Home_Economics' && $Home_Economics != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Home Economics. Please select another subject you have today");
        }
        elseif($subject == 'HPE' && $HPE != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written HPE. Please select another subject you have today");
        }
        elseif($subject == 'Security_Education' && $Security_Education != '') {
          session_n_redirect("class_subject", "class_subject.php", "You have written Security Education. Please select another subject you have today");
        }
        else {
          $_SESSION['class'] = $class;
          $_SESSION['subject'] = $subject;
      
          redirect("cbt.php");
        }
      }
    }
    else {
      session_n_redirect("class_subject", "class_subject.php", "Error selecting student");
    }


  }
} else {
  redirect("cbt.php");
}
