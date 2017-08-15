<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 16.07.17
 * Time: 18:47
 */

header("Content-type: text/html; charset=utf-8;");

include ("./auth.php");
include ("./gallery.php");

if (isset($_POST["reset"])){
	unset($_SESSION["username"]);
	setcookie("username","",time()-3600);
}

if (isset($_SESSION["username"])){
    header("Location: ./users/admin.php");
}

if ((!isset($_SESSION["username"]))&&(!isset($_COOKIE["username"]))) {
	echo "<h3>Вы не авторизировнны!</h3>";
	echo "<a class='btn btn-primary' href=./login.php>Перейти на страницу авторизации</a>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>

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

<h2>Главная страница</h2>

<h3>Создай свою галлерею</h3>

<h3>Пример галереи</h3>

<form method="post" name="reset" action="./index.php">
    <input class="btn btn-danger" type="submit" name="reset" value="Выйти"><br>
</form>

<?php

getGallery("./img");

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>