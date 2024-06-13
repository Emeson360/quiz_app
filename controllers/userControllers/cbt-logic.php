<?php
include_once __DIR__ . '/../../config/database.php';



if (isset($_POST['submit'])) {
  $reg_no = $_SESSION['eass_user']['reg_no'];
  $student_id = $_SESSION['eass_user']['id'];
  $fullname = $_SESSION['eass_user']['fullname'];
  $score = filter_var($_POST['score'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject = $_SESSION['subject'];
  $class = $_SESSION['eass_user']['class'];

  
  $query_session_term = mysqli_query($con, "SELECT * FROM session_term");
  $session_term_data = mysqli_fetch_assoc($query_session_term);
  $session = $session_term_data['session'];
  $term = $session_term_data['term'];
  
  
  // Validation
  if (empty($score)) {
    session_n_redirect("cbt", "cbt.php", "Please take the Test before submission");
  } else {
    
    $query_result = mysqli_query($con, "SELECT * from result WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");
   
    
    if (mysqli_num_rows($query_result) == 1) {

      if ($subject == "English Language") {
        $update_student_score = mysqli_query($con, "UPDATE result SET English_Language = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Mathematics") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Mathematics = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Business Studies") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Business_Studies = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Agric Science") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Agric_Science = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Basic Science") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Basic_Science = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Basic Technology") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Basic_Technology = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "CRS") {
        $update_student_score = mysqli_query($con, "UPDATE result SET CRS = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Social Studies") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Social_Studies = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "History") {
        $update_student_score = mysqli_query($con, "UPDATE result SET History = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Civic Education") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Civic_Education = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Igbo") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Igbo = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Computer Studies") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Computer_Studies = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "French Language") {
        $update_student_score = mysqli_query($con, "UPDATE result SET French_Language = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "CCA") {
        $update_student_score = mysqli_query($con, "UPDATE result SET CCA = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Home Economics") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Home_Economics = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "HPE") {
        $update_student_score = mysqli_query($con, "UPDATE result SET HPE = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } elseif ($subject == "Security Education") {
        $update_student_score = mysqli_query($con, "UPDATE result SET Security_Education = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

        if ($update_student_score) {
          redirect("finished.php");
        }
      } else {
        session_n_redirect("subject", "subject.php", "Failed to save score");
      }
    } else {

      if ($subject == "English Language") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, English_Language) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Mathematics") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Mathematics) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Business Studies") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Business_Studies) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Agric Science" ) {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Agric_Science) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Basic Science") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Basic_Science) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Basic Technology") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Basic_Technology) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "CRS") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, CRS) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Social Studies") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Social_Studies) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "History") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, History) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Civic_Education") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Civic_Education) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Igbo") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Igbo) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Computer Studies") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Computer_Studies) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "French Language") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, French_Language) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "CCA") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, CCA) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Home Economics") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Home_Economics) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "HPE") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, HPE) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } elseif ($subject == "Security Education") {

        $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Security_Education) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

        if ($insert_result) {
          redirect("finished.php");
        }
      } else {
        session_n_redirect("subject", "subject.php", "Failed to save score");
      }
    }
  }
} elseif (isset($_GET['score'])) {
  $score = $_GET['score'];
  $student_id = $_SESSION['eass_user']['id'];
  $fullname = $_SESSION['eass_user']['fullname'];
  $subject = $_SESSION['subject'];
  $class = $_SESSION['eass_user']['class'];

  $query_session_term = mysqli_query($con, "SELECT * FROM session_term");
  $session_term_data = mysqli_fetch_assoc($query_session_term);
  $session = $session_term_data['session'];
  $term = $session_term_data['term'];

  $query_result = mysqli_query($con, "SELECT * from result WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

  if (mysqli_num_rows($query_result) == 1) {

    if ($subject == "English Language") {
      $update_student_score = mysqli_query($con, "UPDATE result SET English_Language = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Mathematics") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Mathematics = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Business Studies") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Business_Studies = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Agric Science" ) {
      $update_student_score = mysqli_query($con, "UPDATE result SET Agric_Science = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Basic Science") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Basic_Science = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Basic Technology") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Basic_Technology = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "CRS") {
      $update_student_score = mysqli_query($con, "UPDATE result SET CRS = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Social Studies") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Social_Studies = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "History") {
      $update_student_score = mysqli_query($con, "UPDATE result SET History = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Civic_Education") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Civic_Education = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Igbo") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Igbo = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Computer Studies") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Computer_Studies = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "French Language") {
      $update_student_score = mysqli_query($con, "UPDATE result SET French_Language = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "CCA") {
      $update_student_score = mysqli_query($con, "UPDATE result SET CCA = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Home Economics") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Home_Economics = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "HPE") {
      $update_student_score = mysqli_query($con, "UPDATE result SET HPE = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Security Education") {
      $update_student_score = mysqli_query($con, "UPDATE result SET Security_Education = '$score' WHERE student_id = '$student_id' AND (class = '$class' AND (session = '$session' AND term = '$term'))");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } else {
      session_n_redirect("subject", "subject.php", "Failed to save score");
    }
  } else {


    if ($subject == "English Language") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, English_Language) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Mathematics") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Mathematics) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Business Studies") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Business_Studies) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Agric Science" ) {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Agric_Science) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Basic Science") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Basic_Science) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Basic Technology") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Basic_Technology) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "CRS") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, CRS) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Social Studies") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Social_Studies) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "History") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, History) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Civic_Education") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Civic_Education) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Igbo") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Igbo) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Computer Studies") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Computer_Studies) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "French Language") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, French_Language) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "CCA") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, CCA) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Home Economics") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Home_Economics) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "HPE") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, HPE) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } elseif ($subject == "Security Education") {

      $insert_result = mysqli_query($con, "INSERT INTO result (student_id, fullname, class, session, term, Security_Education) VALUEs ('$student_id', '$fullname', '$class', '$session', '$term', '$score')");

      if ($insert_result) {
        redirect("finished.php");
      }
    } else {
      session_n_redirect("subject", "subject.php", "Failed to save score");
    }
  }
} else {
  redirect("cbt.php");
}
