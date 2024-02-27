<?php

include __DIR__  . '/config/database.php';

// Destroy the session and logout student
if (isset($_GET['logout'])) {
  if ($_GET['logout'] == 1) {
    session_destroy();
    unset($_SESSION['eass_user']);
    header('location: ' . ROOT_URL . 'index.php');
  }
}
