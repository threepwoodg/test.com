<?php

$connection = mysqli_connect('localhost','root','root','test_db');

if( $connection == false )
{
   echo 'Не удалось подключится<br/>';
   echo mysqli_connect_error();
  exit();
} else 
	{
	echo 'Все гуд!<br/>';
	}

	$result = mysqli_query($connection, "SELECT * FROM `articles_catigories`");
?>

<ul>
	<?php 
		while ( ($cat = mysqli_fetch_assoc($result)) ) 
		{
			echo '<li>' . $cat['title'] . '</li>';
		}
	?>
</ul>

<?php
	mysqli_close($connection);
?>