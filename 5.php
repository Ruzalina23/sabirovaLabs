<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Языки программирования
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<h2>Языки программирования:</h2>
	<table border="1">
		<tr>
			<th> ID </th> 
			<th> Название </th>
			<th> Тип </th>
			<th> Год разработки </th> 
			<th> Тип выполнения </th>
			<th> Автор </th>
		</tr>

	<?php
		$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
		mysqli_query($link, 'SET NAMES utf8');
		mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

		$result = mysqli_query($link, "SELECT yp_id, yp_name, yp_type, yp_year, yp_type_exec, yp_author
		FROM yazprogr");
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['yp_id'] . "</td>";
			echo "<td>" . $row['yp_name'] . "</td>";
			echo "<td>" . $row['yp_type'] . "</td>";
			echo "<td>" . $row['yp_year'] . "</td>";
			echo "<td>" . $row['yp_type_exec'] . "</td>";
			echo "<td>" . $row['yp_author'] . "</td>";
			echo "<td><a href='5-edit.php?ypId=".$row['yp_id']."'>Редактировать</a></td>";
			echo "<td><a href='5-delete.php?ypId=".$row['yp_id']."'>Удалить</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		$num_rows = mysqli_num_rows($result);
		echo "<P>Всего языков программирования: $num_rows </p>";
		echo "<p> <a href='5-new.php'> Добавить язык программирования </a>";
	?>
</body>
</html>