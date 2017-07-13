<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 13.07.17
 * Time: 20:07
 */
header("Content-type: text/html; charset=utf-8;");
session_start();

if ((!isset($_SESSION["username"]))&&(!isset($_COOKIE["username"])))
{
	header("Location: ./login.php");
}
else echo "Hello, " . $_SESSION["username"];


var_dump($_SESSION);
var_dump($_COOKIE);
var_dump($_POST);

/*if (isset($_POST["reset"])){
	unset($_SESSION["username"]);
	unset($_COOKIE["username"]);
	session_destroy();
}*/

?>

<!--<form method="post" action="index.php">
	<input type="submit" name="reset" value="Reset">
</form>-->
