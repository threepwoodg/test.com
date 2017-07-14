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
if (!isset($_SESSION["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
}

else echo "Hello, " . $_SESSION["username"];


var_dump($_SESSION);
var_dump($_COOKIE);

?>
<!--<html>
<body>
<form method="post" action="index.php">
    <input type="checkbox" name="reset" value="1">
    <input type="submit">
</form>
</body>
</html>-->
