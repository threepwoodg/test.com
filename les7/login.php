<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 23.07.17
 * Time: 20:30
 */


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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация пользователя</title>
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<h2>Username</h2>


<form method="post" name="auth" action="login.php" class="form-control">
	<div class="input-group input-group-sm">
		<span class="input-group-addon">@</span>
		<input type="text" class="form-control" name="username" placeholder="Username">
	</div>
	<p>Remember me:</p>
	<input type="checkbox" name="remember" value="1"><br>
	<input type="submit"><br>
	<p>Reset cookies</p>
	<div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="reset" value="1">
      </span>
	</div>
	<p>Select style page</p><br>
	Style 1
	<div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="style" value="1">
      </span>
	</div>
	Style 2
	<div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="style" value="2">
      </span>
	</div>
	Style 3
	<div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="style" value="3">
      </span>
	</div>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>