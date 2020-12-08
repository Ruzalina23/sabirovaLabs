<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Разработчик
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<h2>Разработчик:</h2>
	<table border="1">
		<tr>
			<th> ID </th> 
			<th> Название </th>
			<th> Город </th>
		</tr>

	<?php
		$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
		mysqli_query($link, 'SET NAMES utf8');
		mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

		$result = mysqli_query($link, "SELECT dev_id, dev_name, dev_city
		FROM developer");
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['dev_id'] . "</td>";
			echo "<td>" . $row['dev_name'] . "</td>";
			echo "<td>" . $row['dev_city'] . "</td>";
			echo "<td><a href='5-1-edit.php?devId=".$row['dev_id']."'>Редактировать</a></td>";
			echo "<td><a href='5-1-delete.php?devId=".$row['dev_id']."'>Удалить</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		$num_rows = mysqli_num_rows($result);
		echo "<P>Всего разработчиков: $num_rows </p>";
		echo "<p> <a href='5-1-new.php'> Добавить разработчика</a>";
	?>
</body>
</html>