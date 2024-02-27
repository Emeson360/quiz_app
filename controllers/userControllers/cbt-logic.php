<?php
include_once __DIR__ . '/../../config/database.php';



if (isset($_POST['submit'])) {
  $reg_no = $_SESSION['eass_user']['reg_no'];
  $score = filter_var($_POST['score'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $class = $_SESSION['class'];
  $subject = $_SESSION['subject'];

  // Validation
  if (empty($score)) {
    session_n_redirect("cbt", "cbt.php", "Please take the Test before submission");
  } else {

    if ($subject == "English_Language") {
      $update_student_score = mysqli_query($con, "UPDATE students SET English_Language = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Mathematics") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Mathematics = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Business_Studies") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Business_Studies = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Agric_Science") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Agric_Science = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Basic_Science") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Basic_Science = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Basic_Technology") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Basic_Technology = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "CRS") {
      $update_student_score = mysqli_query($con, "UPDATE students SET CRS = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Social_Studies") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Social_Studies = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "History") {
      $update_student_score = mysqli_query($con, "UPDATE students SET History = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Civic_Education") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Civic_Education = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Igbo") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Igbo = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Computer_Studies") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Computer_Studies = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "French_Language") {
      $update_student_score = mysqli_query($con, "UPDATE students SET French_Language = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "CCA") {
      $update_student_score = mysqli_query($con, "UPDATE students SET CCA = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Home_Economics") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Home_Economics = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "HPE") {
      $update_student_score = mysqli_query($con, "UPDATE students SET HPE = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } elseif ($subject == "Security_Education") {
      $update_student_score = mysqli_query($con, "UPDATE students SET Security_Education = '$score' WHERE reg_no = '$reg_no'");

      if ($update_student_score) {
        redirect("finished.php");
      }
    } else {
      session_n_redirect("cbt", "cbt.php", "Failed to save score");
    }
  }
} elseif (isset($_GET['score'])) {
  $score = $_GET['score'];
  $reg_no = $_SESSION['eass_user']['reg_no'];
  $class = $_SESSION['class'];
  $subject = $_SESSION['subject'];

  if ($subject == "English_Language") {
    $update_student_score = mysqli_query($con, "UPDATE students SET English_Language = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Mathematics") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Mathematics = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Business_Studies") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Business_Studies = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Agric_Science") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Agric_Science = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Basic_Science") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Basic_Science = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Basic_Technology") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Basic_Technology = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "CRS") {
    $update_student_score = mysqli_query($con, "UPDATE students SET CRS = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Social_Studies") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Social_Studies = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "History") {
    $update_student_score = mysqli_query($con, "UPDATE students SET History = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Civic_Education") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Civic_Education = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Igbo") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Igbo = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Computer_Studies") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Computer_Studies = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "French_Language") {
    $update_student_score = mysqli_query($con, "UPDATE students SET French_Language = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "CCA") {
    $update_student_score = mysqli_query($con, "UPDATE students SET CCA = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Home_Economics") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Home_Economics = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "HPE") {
    $update_student_score = mysqli_query($con, "UPDATE students SET HPE = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } elseif ($subject == "Security_Education") {
    $update_student_score = mysqli_query($con, "UPDATE students SET Security_Education = '$score' WHERE reg_no = '$reg_no'");

    if ($update_student_score) {
      redirect("finished.php");
    }
  } else {
    session_n_redirect("cbt", "cbt.php", "Failed to save score");
  }
} else {
  redirect("cbt.php");
}
