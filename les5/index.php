<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 13.07.17
 * Time: 20:07
 */
header("Content-type: text/html; charset=utf-8;");
session_start();

if (isset($_POST["reset"])){
	unset($_SESSION["username"]);
	setcookie("username","",time()-3600);
}

if ((!isset($_SESSION["username"]))&&(!isset($_COOKIE["username"]))) {
	header("Location: ./login.php");
}
if ((!isset($_SESSION["username"]))&&(isset($_COOKIE["username"]))){
    $_COOKIE["username"] = $_SESSION["username"];
}


$username = $_SESSION["username"];

echo "Hello, {$username} <br>";

?>
<html>
<body>
<a href="./a.php">Site A</a><br>
<a href="./b.php">Site B</a>
<form method="post" action="index.php">
    <input type="submit" name="reset" value="Logout">
</form>
</body>
</html>
