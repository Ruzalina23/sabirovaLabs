<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Добавление нового приложения
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<h2>Добавление приложения:</h2>
	<form metod="get" action="5-2-save-new.php">
		<br> Язык программирования (ID): <input type="text" name="appYpId">
		<br> Разработчик (ID): <input type="text" name="appDevId">
		<br> Дата создания: <input type="text" name="appData"> (формат даты dd.mm.yyyy)
		<br> Текущая версия: <input type="text" name="appVers">
		<br> Название: <input type="text" name="appName">
		<p><input name="add" type="submit" value="Добавить">
		<input name="rmv" type="reset" value="Очистить"></p>
	</form>
</body>
</html>