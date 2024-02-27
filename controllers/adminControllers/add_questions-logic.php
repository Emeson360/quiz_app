<?php
include_once __DIR__  . '/../../config/database.php';


if (isset($_POST['add_questions'])) {
  $term = filter_var($_POST['term'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $type = filter_var($_POST['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $class = filter_var($_POST['class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $instruction = filter_var($_POST['instruction'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q1 = filter_var($_POST['q1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q1_opt_a = filter_var($_POST['q1_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q1_opt_b = filter_var($_POST['q1_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q1_opt_c = filter_var($_POST['q1_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q1_opt_d = filter_var($_POST['q1_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q1_answer = filter_var($_POST['q1_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q2 = filter_var($_POST['q2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q2_opt_a = filter_var($_POST['q2_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q2_opt_b = filter_var($_POST['q2_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q2_opt_c = filter_var($_POST['q2_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q2_opt_d = filter_var($_POST['q2_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q2_answer = filter_var($_POST['q2_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q3 = filter_var($_POST['q3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q3_opt_a = filter_var($_POST['q3_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q3_opt_b = filter_var($_POST['q3_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q3_opt_c = filter_var($_POST['q3_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q3_opt_d = filter_var($_POST['q3_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q3_answer = filter_var($_POST['q3_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q4 = filter_var($_POST['q4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q4_opt_a = filter_var($_POST['q4_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q4_opt_b = filter_var($_POST['q4_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q4_opt_c = filter_var($_POST['q4_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q4_opt_d = filter_var($_POST['q4_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q4_answer = filter_var($_POST['q4_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q5 = filter_var($_POST['q5'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q5_opt_a = filter_var($_POST['q5_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q5_opt_b = filter_var($_POST['q5_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q5_opt_c = filter_var($_POST['q5_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q5_opt_d = filter_var($_POST['q5_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q5_answer = filter_var($_POST['q5_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q6 = filter_var($_POST['q6'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q6_opt_a = filter_var($_POST['q6_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q6_opt_b = filter_var($_POST['q6_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q6_opt_c = filter_var($_POST['q6_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q6_opt_d = filter_var($_POST['q6_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q6_answer = filter_var($_POST['q6_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q7 = filter_var($_POST['q7'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q7_opt_a = filter_var($_POST['q7_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q7_opt_b = filter_var($_POST['q7_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q7_opt_c = filter_var($_POST['q7_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q7_opt_d = filter_var($_POST['q7_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q7_answer = filter_var($_POST['q7_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q8 = filter_var($_POST['q8'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q8_opt_a = filter_var($_POST['q8_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q8_opt_b = filter_var($_POST['q8_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q8_opt_c = filter_var($_POST['q8_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q8_opt_d = filter_var($_POST['q8_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q8_answer = filter_var($_POST['q8_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q9 = filter_var($_POST['q9'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q9_opt_a = filter_var($_POST['q9_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q9_opt_b = filter_var($_POST['q9_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q9_opt_c = filter_var($_POST['q9_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q9_opt_d = filter_var($_POST['q9_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q9_answer = filter_var($_POST['q9_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q10 = filter_var($_POST['q10'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q10_opt_a = filter_var($_POST['q10_opt_a'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q10_opt_b = filter_var($_POST['q10_opt_b'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q10_opt_c = filter_var($_POST['q10_opt_c'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q10_opt_d = filter_var($_POST['q10_opt_d'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q10_answer = filter_var($_POST['q10_answer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



  // Insert Questions to DB
  $insert_questions = mysqli_query($con, "INSERT INTO questions (term, type, class, subject, instruction, q1, q1_opt_a, q1_opt_b, q1_opt_c, q1_opt_d,q1_answer, q2, q2_opt_a, q2_opt_b, q2_opt_c, q2_opt_d, q2_answer, q3, q3_opt_a, q3_opt_b, q3_opt_c, q3_opt_d, q3_answer, q4, q4_opt_a, q4_opt_b, q4_opt_c, q4_opt_d, q4_answer, q5, q5_opt_a, q5_opt_b, q5_opt_c, q5_opt_d, q5_answer, q6, q6_opt_a, q6_opt_b, q6_opt_c, q6_opt_d, q6_answer, q7, q7_opt_a, q7_opt_b, q7_opt_c, q7_opt_d, q7_answer, q8, q8_opt_a, q8_opt_b, q8_opt_c, q8_opt_d, q8_answer, q9, q9_opt_a, q9_opt_b, q9_opt_c, q9_opt_d, q9_answer, q10, q10_opt_a, q10_opt_b, q10_opt_c, q10_opt_d, q10_answer) VALUES ('$term', '$type', '$class', '$subject', '$instruction', '$q1', '$q1_opt_a', '$q1_opt_b', '$q1_opt_c', '$q1_opt_d', '$q1_answer', '$q2', '$q2_opt_a', '$q2_opt_b', '$q2_opt_c', '$q2_opt_d', '$q2_answer', '$q3', '$q3_opt_a', '$q3_opt_b', '$q3_opt_c', '$q3_opt_d', '$q3_answer', '$q4', '$q4_opt_a', '$q4_opt_b', '$q4_opt_c', '$q4_opt_d', '$q4_answer', '$q5', '$q5_opt_a', '$q5_opt_b', '$q5_opt_c', '$q5_opt_d', '$q5_answer', '$q6', '$q6_opt_a', '$q6_opt_b', '$q6_opt_c', '$q6_opt_d', '$q6_answer', '$q7', '$q7_opt_a', '$q7_opt_b', '$q7_opt_c', '$q7_opt_d', '$q7_answer', '$q8', '$q8_opt_a', '$q8_opt_b', '$q8_opt_c', '$q8_opt_d', '$q8_answer', '$q9', '$q9_opt_a', '$q9_opt_b', '$q9_opt_c', '$q9_opt_d', '$q9_answer', '$q10', '$q10_opt_a', '$q10_opt_b', '$q10_opt_c', '$q10_opt_d', '$q10_answer')");

  if ($insert_questions) {
    session_n_redirect("add_questions-success", "dashboard/add_questions.php", "Questions Added Successfully");
  } else {
    session_n_redirect("add_questions", "dashboard/add_questions.php", "Questions insertion Error");
  }

} else {
  redirect('dashboard/add_questions.php');
  die();
}
