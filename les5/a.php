<?php
/**
 * Created by PhpStorm.
 * User: tmn_mgmt
 * Date: 14.07.17
 * Time: 15:58
 */
header("Content-type: text/html; charset=utf-8;");
setcookie("page","a");
include_once ("./auth.php");
echo "Hello, {$username} <br>";

?>
<html>
<head>
    <link
            rel="stylesheet"
            href="./css/style<?php echo "{$_COOKIE["style"]}" ?>.css"
            type="text/css" />
    <title>Page A</title>
</head>
<body>
    <h3>Page A</h3>
    <a href="index.php">Main</a>
    <a href="b.php">Page B</a>
</body>
</html>
