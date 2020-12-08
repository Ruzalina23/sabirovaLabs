<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Изменение разработчика
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<?php
		$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
		mysqli_query($link, 'SET NAMES utf8');
		mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

		$result = mysqli_query($link, "SELECT dev_id, dev_name, dev_city
		FROM developer WHERE dev_id=".$_GET['devId']);
		while ($row = mysqli_fetch_array($result)){
			$devId = $_GET['devId'];
			$devName = $row['dev_name'];
			$devCity = $row['dev_city'];
		}
	?>
	<h2>Изменение разработчика:</h2>
	<form metod="get" action="5-1-save-edit.php">
		<input type="hidden" name="devId" value=<?php echo '\'' . $devId . '\'' ?>>
		<br> Название: <input type="text" name="devName" value=<?php echo '\'' . $devName . '\'' ?>>
		<br> Автор: <input type="text" name="devCity" value=<?php echo '\'' . $devCity . '\'' ?>>
		<p><input name="add" type="submit" value="Сохранить">
		<input name="rmv" type="reset" value="Очистить"></p>
	</form>
</body>
</html>