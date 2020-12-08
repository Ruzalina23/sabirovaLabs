<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Изменение приложения
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<?php
		$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
		mysqli_query($link, 'SET NAMES utf8');
		mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

		$result = mysqli_query($link, "SELECT app_id, app_yp_id, app_dev_id, app_data, app_vers, app_name
		FROM application WHERE app_id=".$_GET['appId']);
		while ($row = mysqli_fetch_array($result)){
			$appId = $_GET['appId'];
			$appYpId = $row['app_yp_id'];
			$appDevId = $row['app_dev_id'];
			$appData = $row['app_data'];
			$appVers = $row['app_vers'];
			$appName = $row['app_name'];
		}
	?>
	<h2>Изменение приложения:</h2>
	<form metod="get" action="5-2-save-edit.php">
		<input type="hidden" name="appId" value=<?php echo '\'' . $appId . '\'' ?>>
		<br> Язык программирования: <input type="text" name="appYpId" value=<?php echo '\'' . $appYpId . '\'' ?>> Укажите ID
		<br> Разработчик: <input type="text" name="appDevId" value=<?php echo '\'' . $appDevId . '\'' ?>> Укажите ID
		<br> Дата создания: <input type="text" name="appData" value=<?php echo '\'' . date("d.m.Y", strtotime($appData)) . '\'' ?>>
		<br> Текущая версия: <input type="text" name="appVers" value=<?php echo '\'' . $appVers . '\'' ?>>
		<br> Название: <input type="text" name="appName" value=<?php echo '\'' . $appName . '\'' ?>>
		<p><input name="add" type="submit" value="Сохранить">
		<input name="rmv" type="reset" value="Очистить"></p>
	</form>
</body>
</html>