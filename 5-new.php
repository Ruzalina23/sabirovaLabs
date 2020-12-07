<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Добавление нового вклада
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<h2>Добавление языки программирования:</h2>
	<form metod="get" action="5-save-new.php">
		<br> Название: <input type="text" name="ypName">
		<br> Тип: <select name="ypType">
				<option> Компилируемый </option>
				<option> Интерпретируемый </option>
			</select>
		<br> Год разработки: <input type="text" name="ypYear">
		<br> Тип выполнения: <select name="ypTypeExec">
				<option> Серверный </option>
				<option> Клиентский </option>
			</select>
		<br> Автор: <input type="text" name="ypAuthor">
		<p><input name="add" type="submit" value="Добавить">
		<input name="rmv" type="reset" value="Очистить"></p>
	</form>
</body>
</html>