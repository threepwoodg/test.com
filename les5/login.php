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
	    setcookie("username",$_POST["username"],time()+3600);
    }
	if (isset($_POST["style"])){
		setcookie("style",$_POST["style"],time()+3600);
	}
	header("Location: ./index.php");
}
if (isset($_POST["reset"])){
	unset($_SESSION["username"]);
	setcookie("username","",time()-3600);
	setcookie("page","",time()-3600);
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
        Remember me:
        <input type="checkbox" name="remember" value="1"><br>
		<input type="submit"><br>
        Reset cookies
        <input type="checkbox" name="reset" value="1"><br>
        Select style page<br>
        Style 1
        <input type="radio" name="style" value="1"><br>
        Style 2
        <input type="radio" name="style" value="2"><br>
        Style 3
        <input type="radio" name="style" value="3"><br>
	</form>
	</body>
</html>