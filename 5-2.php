<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Приложения
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	Скачать таблицу языков программирования в формате <a href="gen_xls.php">xls</a> или <a href="gen_pdf.php">pdf</a></p>
	<hr>
	<h2>Приложения:</h2>
	<table border="1">
		<tr>
			<th> ID </th> 
			<th> Язык программирования (ID) </th>
			<th> Разработчик (ID) </th>
			<th> Дата создания </th> 
			<th> Текущая версия </th>
			<th> Название </th>
		</tr>

	<?php
		function findNameAsYazprogr ($link, $id) {
			$result = mysqli_query($link, "SELECT yp_name FROM yazprogr WHERE yp_id=".$id);
			$row = mysqli_fetch_array($result);
			return $row['yp_name'];
		}

		function findNameAsDeveloper ($link, $id) {
			$result = mysqli_query($link, "SELECT dev_name FROM developer WHERE dev_id=".$id);
			$row = mysqli_fetch_array($result);
			return $row['dev_name'];
		}

		$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
		mysqli_query($link, 'SET NAMES utf8');
		mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

		$result = mysqli_query($link, "SELECT app_id, app_yp_id, app_dev_id, app_data, app_vers, app_name FROM application");
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['app_id'] . "</td>";
			echo "<td>" . findNameAsYazprogr($link, $row['app_yp_id']) . " (". $row['app_yp_id'] . ")" . "</td>";
			echo "<td>" . findNameAsDeveloper($link, $row['app_dev_id']) . " (" . $row['app_dev_id'] . ")" . "</td>";
			echo "<td>" . date("d.m.Y", strtotime($row['app_data'])) . "</td>";
			echo "<td>" . $row['app_vers'] . "</td>";
			echo "<td>" . $row['app_name'] . "</td>";
			echo "<td><a href='5-2-edit.php?appId=".$row['app_id']."'>Редактировать</a></td>";
			echo "<td><a href='5-2-delete.php?appId=".$row['app_id']."'>Удалить</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		$num_rows = mysqli_num_rows($result);
		echo "<P>Всего приложений: $num_rows </p>";
		echo "<p> <a href='5-2-new.php'> Добавить приложение </a>";
	?>
</body>
</html>