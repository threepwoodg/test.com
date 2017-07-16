<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 16.07.17
 * Time: 18:47
 */

header("Content-type: text/html; charset=utf-8;");

$f = fopen('./test.txt', 'r');
$c = fgets($f);

echo $c;

fclose($f);
?>

