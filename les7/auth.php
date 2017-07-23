<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 23.07.17
 * Time: 20:30
 */

session_start();

if ((!isset($_SESSION["username"]))&&(isset($_COOKIE["username"]))){
	$_SESSION['username'] = $_COOKIE['username'];
	if (isset($_COOKIE['page'])){
	}
}
?>
