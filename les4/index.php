<html>
<head>
	<title>Галерея изображений</title> </head>
<body>
<h2>Какое-то описание картинки</h2>
<?php
for($i = 1; $i <= 16; $i++)
	echo "<a href = photo.php?id=$i >Картинка No$i</a><br/>";

define('SUM', 1);
define('MIN', 2);
define('DIV', 3);
define('MUL', 4);

function Plus ($x, $y)
{
	return $x + $y;
}

function Minus ($x, $y)
{
	return $x - $y;
}

function Division ($x, $y)
{
	if($y == 0) $result="На ноль делтить нельзя!";
	else $result=$x/$y;
	return $result;
}

function Multiplication ($x, $y)
{
	return $x * $y;
}

function mathOperation($x, $y, $operation)
{
	$result = $operation;
	switch ($result)
	{
		case SUM:
			echo $result = Plus($x, $y);
			break;
		case MIN:
			echo $result = Minus($x, $y);
			break;
		case DIV:
			echo $result = Division($x, $y);
			break;
		case MUL:
			echo $result = Multiplication($x, $y);
			break;
	}
	return $result;
}


if(isset($_POST['a']) && isset($_POST['b'])) $result = mathOperation($_POST['a'], $_POST['b'],$_POST['operation']);
else
	$result = "";

?>
<form method="post">
    <input type="text" name="a"/>
    <select name="operation">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">/</option>
        <option value="4">*</option>
    </select>
    <input type="text" name="b" /> <input type="submit" value="=" /> <?php echo $result; ?>


</body>
</html>