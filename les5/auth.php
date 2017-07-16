<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 16.07.17
 * Time: 12:35
 */
session_start();

if (isset($_POST["reset"])){
	unset($_SESSION["username"]);
	setcookie("username","",time()-3600);
}

if ((!isset($_SESSION["username"]))&&(!isset($_COOKIE["username"]))) {
	header("Location: ./login.php");
}
if ((!isset($_SESSION["username"]))&&(isset($_COOKIE["username"]))){
	$_SESSION['username'] = $_COOKIE['username'];
	if (isset($_COOKIE['page'])){
		header("Location: ./{$_COOKIE['page']}.php");
	}
}

$username = $_SESSION["username"];
?>