<?php

include __DIR__  . '/../config/database.php';

// Destroy the session and logout student
if (isset($_GET['logout'])) {
  if ($_GET['logout'] == 1) {
    session_destroy();
    unset($_SESSION['eass_admin']);
    header('location: ' . ROOT_URL . 'admin_login.php');
  }
}
