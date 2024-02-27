<?php

$user = $_SESSION['sc_user'];
$user_id = $user['id'];


if(isset($_SESSION['last_active_time'])) {
    if((time() - $_SESSION['last_active_time']) > (10 * 60) ) {
        $query = "UPDATE users SET online_status = 0 WHERE id = $user_id";
		$result = mysqli_query($con, $query);
        unset($_SESSION['last_active_time']);
        unset($_SESSION['sc_user']);
        session_destroy();
        redirect('login.php');
    }
}

$_SESSION['last_active_time'] = time();

