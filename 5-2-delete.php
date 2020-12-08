<?php
	$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");
	
	mysqli_query($link, "DELETE FROM application WHERE app_id=".$_GET["appId"]);

 	header("Location: 5-2.php");
	exit;
?>