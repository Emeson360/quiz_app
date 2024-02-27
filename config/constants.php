<?php
session_start();
define('ROOT_URL', 'http://localhost/Quiz_app_(CBT)/'); //DEV


// Session and redirect
function session_n_redirect($sess_name, $header_path, $sess_msg)
{
	$_SESSION[$sess_name] = $sess_msg;
	header('location: ' . ROOT_URL . $header_path);
	die;
}

// Session and redirect
function redirect($header_path)
{
	header('location: ' . ROOT_URL . $header_path);
	die;
}


// Generate a random token
function genToken($length = 35)
{
	$stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`~!@#$%^&*()-_=+[{]}|";:,<.>/?';
	$stringLength = strlen($stringSpace);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString = $randomString . $stringSpace[rand(0, $stringLength - 1)];
	}
	return $randomString;
}

// Generate a random transaction ID
function transaction_id($n = 10)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';

	for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}


// check if user is logged in
function isLoggedIn()
{
	if (isset($_SESSION['eass_user'])) {
		return true;
	} else {
		return false;
	}
}

// check if admin is logged in
function isAdminLoggedIn()
{
	if (isset($_SESSION['eass_admin'])) {
		return true;
	} else {
		return false;
	}
}


function dd($data)
{
	var_dump($data);
	die;
}
