<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 23.07.17
 * Time: 20:34
 */

include_once ("./auth.php");
include ("./settings.php");

function getGallery($path){
	
	$arr_files = scandir($path);
	foreach ($arr_files as $k => $v) {
		$files = $v;
		if (($files != '.')&&($files != '..')){
			echo "<a href='./img/{$v}'><img src=./img/{$v} height=150 width=120></a>";
			echo "
				<form method=post action=./index.php enctype=multipart/form-data>
                <input type=submit value=deleted name=deleted class=btn btn-default>
                ";
		}
	}
}

function uploadFiles($file){
	if ($file['name'] == '') {
		echo 'Error, file is empty!';
		return;
	}
	if (($file['type'] == PNG)||($file['type'] == JPEG)||($file['type'] == JPG)) {
		if (copy($file['tmp_name'], './img/' . $file['name'])) {
			echo 'File upload!';
			header( "Location: http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
			if (isset($file['description'])){
				$f = fopen($file['description'], 'w+');
				fputs($f,'./img/log.txt');
				fclose($f);
			}
		}
		else echo 'Error';
	} else
		echo 'Error, select image!';
}

/*$link = mysqli_init();

$success = mysqli_real_connect($link, SQL_HOST, SQL_USERNAME, SQL_PASSWORD, SQL_DB, SQL_PORT);

$query = mysqli_query($link,'SELECT * FROM `users`');

while ($row = mysqli_fetch_assoc($query)){
	foreach ($row as $k => $v){
		echo "{$k} - {$v} <br>";
	}
}*/

?>

