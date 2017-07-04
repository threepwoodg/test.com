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

function Division ($x, $y){
	if($y == 0) $result="На ноль делтить нельзя!";
	else $result=$x/$y;
	return $result;
}

function Multiplication ($x, $y)
{
	return $x * $y;
}

function mathOperation($x, $y, $operation){
	$result = $operation;
	switch ($result) {
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
?>

<h3>Task 2</h3>

<?php

if(isset($_POST['a']) && isset($_POST['b']))
    $res_task2 = mathOperation($_POST['a'], $_POST['b'],$_POST['operation']);
else
	$res_task2 = "";
?>

<form method="post">
    <input type="number" name="a" placeholder="Введите значение a" required />
    <select name="operation">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">/</option>
        <option value="4">*</option>
    </select>
    <input type="number" name="b" placeholder="Введите значение b" required />
    <input type="submit" value="=" /> <?php echo $res_task2;?>
    
    
    <h3>Task 3</h3>
    
    <?php if(isset($_POST['c']) && isset($_POST['d'])) {
	    foreach ($_POST as $k => $v) {
		    if ($k == 'SUM') $res_task3 = mathOperation($_POST['c'], $_POST['d'], SUM);
            elseif ($k == 'MIN') $res_task3 = mathOperation($_POST['c'], $_POST['d'], MIN);
            elseif ($k == 'DIV') $res_task3 = mathOperation($_POST['c'], $_POST['d'], DIV);
            elseif ($k == 'MUL') $res_task3 = mathOperation($_POST['c'], $_POST['d'], MUL);
	    }
    }
    else
    $res_task3 = "";
    ?>
    
    <form method="post">
        <input type="number" name="c" placeholder="Введите значение c" required />
        <input type="number" name="d" placeholder="Введите значение d" required /> =
        <?php echo $res_task3;?> <br/>
        <input type="submit" name="SUM" value="+" />
	    <input type="submit" name="MIN" value="-" />
        <input type="submit" name="DIV" value="/" />
        <input type="submit" name="MUL" value="*" />
        
    
</body>
</html>