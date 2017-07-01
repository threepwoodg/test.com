<?php
	$id = $_GET['id']; // param id
var_dump($_GET);
?>
<html>
	<head>
		<title>Просмотр картинки № <?php echo $id;?></title>
	</head>
		<body>
		<img src="img/<?php echo $id;?>.png">
		<h2>Описание img</h2>
		<a href="index.php"><< Назад</a>
		</body>
</html>
