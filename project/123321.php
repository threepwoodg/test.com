<?php
/**
 * Created by PhpStorm.
 * User: tmn_mgmt
 * Date: 18.08.17
 * Time: 14:37
 */

header("Content-type: text/html; charset=utf-8;");

define('SQL_USERNAME','root');
define('SQL_PASSWORD','root');
define('SQL_HOST','localhost');
define('SQL_PORT','8889');
define('SQL_DB','ne');

define('PNG','image/png');
define('JPEG','image/jpeg');
define('JPG','image/jpg');

$link = mysqli_init();

$success = mysqli_real_connect($link, SQL_HOST, SQL_USERNAME, SQL_PASSWORD, SQL_DB, SQL_PORT);

$query = mysqli_query($link,'SELECT * FROM `ne_report`');

var_dump($_GET);

var_dump($_POST);

                while ($row = mysqli_fetch_assoc($query)){
                    foreach ($row as $k => $v){
                        var_dump($row);
                    }
                        }
?>