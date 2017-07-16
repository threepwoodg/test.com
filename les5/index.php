<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 13.07.17
 * Time: 20:07
 */
header("Content-type: text/html; charset=utf-8;");
var_dump($_COOKIE);
include_once ("./auth.php");
echo "Hello, {$username} <br>";
?>
<html>
<body>
<head>
    <link
            rel="stylesheet"
            href="./css/style<?php echo "{$_COOKIE["style"]}" ?>.css"
            type="text/css" />
    <title>Main</title>
</head>
<a href="./a.php">Site A</a><br>
<a href="./b.php">Site B</a>
<form method="post" action="./auth.php">
    <input type="submit" name="reset" value="Logout">
</form>
</body>
</html>