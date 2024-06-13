<?php

include __DIR__  . '/config/database.php';

if (isset($_GET['nextSubject'])) {
  if ($_GET['nextSubject'] == 1) {
    header('location: ' . ROOT_URL . 'subject.php');
  }
}

if (isset($_GET['logout'])) {
  if ($_GET['logout'] == 1) {
    session_destroy();
    unset($_SESSION['eass_user']);
    header('location: ' . ROOT_URL . 'index.php');
  }
}
