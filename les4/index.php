<html>
<head>
	<title>Галерея изображений</title> </head>
<body>
<h2>Какое-то описание картинки</h2>
<?php
for($i = 1; $i <= 16; $i++)
	echo "<a href = photo.php?id=$i >Картинка No$i</a><br/>";
?>
</body>
</html>