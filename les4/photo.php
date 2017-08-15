<?php
	$id = $_GET['id']; // param id
?>
<html>
	<head>
		<title>Просмотр картинки № <?php echo $id;?></title>
	</head>
		<body>
		<img src="<?php echo $id;?>.png">
		<h2>Описание картинки <?php echo $id;?></h2>
		<a href="../project/index.php"><< Назад</a>
		</body>
</html>
