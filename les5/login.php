<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 13.07.17
 * Time: 20:08
 */
header("Content-type: text/html; charset=utf-8;");

if (isset($_POST["username"])) {
	session_start();
	$_SESSION['username'] = $_POST['username'];
	if (isset($_POST["remember"])){
	    $_COOKIE["username"] = $_POST["username"];
    }
	header("Location: ./index.php");
}

?>

<html>
	<head>
		<title>LOGIN PAGE</title>
	</head>
    <body>
	<h2>Username</h2><br>
	<form method="post" name="auth" action="login.php">
		<input type="text" name="username"><br>
        Remember me:<input type="checkbox" name="remember" value="1"><br>
		<input type="submit">
	</form>
	
	
	</body>
</html>