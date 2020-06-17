<?php
require_once('include/function.php');
$token =  get_param("token");

// var_dump($token);
// var_dump($_SESSION["token"]);

if ($_SESSION["token"] == $token && isset($_SESSION['logged-in'])) {

	//Hủy bỏ phiên làm việc
	unset($_SESSION['logged-in']);

	// unset all session 
	session_destroy();

	// redirect url
	header('Location: login.php');
	exit;
}
if ($_SESSION["id_role"] == "Admin") {
	header('Location: admin.php');
	exit;
}
if ($_SESSION["id_role"] == "Manager") {
	header('Location: manager.php');
	exit;
}
if ($_SESSION["id_role"] == "User") {
	header('Location: user.php');
	exit;
}
