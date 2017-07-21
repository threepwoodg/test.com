<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 16.07.17
 * Time: 18:47
 */

header("Content-type: text/html; charset=utf-8;");

define('SQL_USERNAME','rem_root');
define('SQL_PASSWORD','rem_root');
define('SQL_HOST','87.229.176.206');
define('SQL_PORT','8889');
define('SQL_DB','test_db');

define('PNG','image/png');
define('JPEG','image/jpeg');
define('JPG','image/jpg');

function getGallery($path){
	
	$arr_files = scandir($path);
	foreach ($arr_files as $k => $v) {
		$files = $v;
		if (($files != '.')&&($files != '..')){
				echo "<a href='./img/{$v}'><img src=./img/{$v} height=150></a>";
			}
		}
}

function uploadFiles($file){
	if ($file['name'] == '') {
		echo 'Error, file is empty!';
		return;
	}
	if (($file['type'] == PNG)||($file['type'] == JPEG)||($file['type'] == JPG)) {
			if (copy($file['tmp_name'], './img/' . $file['name']))
				echo 'File upload!';
			        else
				        echo 'Error';
		    } else
			echo 'Error, select image!';
}

$link = mysqli_init();

$success = mysqli_real_connect($link, SQL_HOST, SQL_USERNAME, SQL_PASSWORD, SQL_DB, SQL_PORT);

$query = mysqli_query($link,'SELECT * FROM `Users`');

while ($row = mysqli_fetch_assoc($query)){
    foreach ($row as $k => $v){
        echo "{$k} - {$v} <br>";
    }
}

?>

<html>
<body>
<head>
	<link
		rel="stylesheet"
		href="./css/style.css"
		type="text/css" />
	<title>Gallery</title>
</head>
<h2>Gallery</h2>
	<?php
	getGallery('./img');
	?>
<h3>Select and pull your image</h3>
<form method="post" action="index.php" enctype="multipart/form-data">
	<input type="file" name="user_image"><br>
    <textarea name="description"></textarea>
	<input type="submit" value="sand">
</form>
	<?php
	
	if (isset($_FILES['user_image'])){
		uploadFiles($_FILES['user_image']);
	}
	?>
</body>
</html>