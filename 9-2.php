<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];

    $link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'sabirova') or die ("Нет такой таблицы!");

    $sql_add = "INSERT INTO pisma SET name='" . $name ."', title='". $title ."', message='". $message ."', email='". $email ."'";

	mysqli_query($link, $sql_add);
	if (mysqli_affected_rows($link) > 0) {
		echo("Готово");
	}
    

?>