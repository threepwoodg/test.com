<?php
/**
 * Created by PhpStorm.
 * User: anesterenko
 * Date: 16.07.17
 * Time: 18:47
 */

header("Content-type: text/html; charset=utf-8;");

function getGallery($path){
	
	$arr_files = scandir($path);
	foreach ($arr_files as $k => $v) {
		$files = $v;
		if (($files != '.')&&($files != '..')){
			if ((strpos($files,'.png'))||(strpos($files,'.jpeg'))||(strpos($files,'.jpg'))) {
				echo "<img src=./img/{$v} height=95>";
				echo $v;
			}
		}
	}
}

function uploadFiles($file){
	if ($file['name'] == '') {
		echo "Error, file is empty!";
		return;
	}
	if ((strpos($file['name'], '.png')) || (strpos($file['name'], '.jpeg')) || (strpos($file['name'], '.jpg'))) {
		if (copy($file['tmp_name'], './img/' . $file['name']))
			echo 'File upload!';
		else
			echo 'Error';
	} else
		echo "Error, select image!";
}

/*$f = fopen('./test.txt', 'r');
	$c = file_get_contents('./test.txt');
	echo $c . "<br>";
	fclose($f);*/
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
<form method="post" action="./index.php" enctype="multipart/form-data">
	<input type="file" name="user_image"><br>
	<input type="submit" value="send">
</form>
	<?php
	
	if (isset($_FILES['user_image'])){
		uploadFiles($_FILES['user_image']);
	}
	?>
</body>
</html>