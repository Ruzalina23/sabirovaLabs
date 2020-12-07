<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Изменение языка программирования
	</title>
</head>
<body>
	<p><a href="5.php">Языки программирования</a> | <a href="5-1.php">Разработчики</a> | <a href="5-2.php">Приложения</a> <br>
	<hr>
	<?php
		$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
		mysqli_query($link, 'SET NAMES utf8');
		mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

		$result = mysqli_query($link, "SELECT yp_id, yp_name, yp_type, yp_year, yp_type_exec, yp_author
		FROM yazprogr WHERE yp_id=".$_GET['ypId']);
		while ($row = mysqli_fetch_array($result)){
			$ypId = $_GET['ypId'];
			$ypName = $row['yp_name'];
			$ypType = $row['yp_type'];
			$ypYear = $row['yp_year'];
			$ypTypeExec = $row['yp_type_exec'];
			$ypAuthor = $row['yp_author'];
		}
	?>
	<h2>Добавление языки программирования:</h2>
	<form metod="get" action="5-save-edit.php">
		<input type="hidden" name="ypId" value=<?php echo '\'' . $ypId . '\'' ?>>
		<br> Название: <input type="text" name="ypName" value=<?php echo '\'' . $ypName . '\'' ?>>
		<?php if($ypType == "Интерпретируемый") {
			echo "<br> Тип: <select name='ypType'>
				<option> Компилируемый </option>
				<option selected> Интерпретируемый </option>
			</select>";
		} else {
			echo "<br> Тип: <select name='ypType'>
				<option selected> Компилируемый </option>
				<option> Интерпретируемый </option>
			</select>";
		}
		?>
		<br> Год разработки: <input type="text" name="ypYear" value=<?php echo '\'' . $ypYear . '\'' ?>>
		<?php if($ypType == "Клиентский") {
			echo "<br> Тип: <select name='ypTypeExec'>
				<option> Серверный </option>
				<option selected> Клиентский </option>
			</select>";
		} else {
			echo "<br> Тип: <select name='ypType'>
				<option selected> Серверный </option>
				<option> Клиентский </option>
			</select>";
		}
		?>
		<br> Автор: <input type="text" name="ypAuthor" value=<?php echo '\'' . $ypAuthor . '\'' ?>>
		<p><input name="add" type="submit" value="Сохранить">
		<input name="rmv" type="reset" value="Очистить"></p>
	</form>
</body>
</html>