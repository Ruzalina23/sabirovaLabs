<?php
	$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

	mysqli_query($link, "UPDATE yazprogr SET 
		yp_name='".$_GET['ypName']."', 
		yp_type='".$_GET['ypType']."',
		yp_year='".$_GET['ypYear']."', 
		yp_type_exec='".$_GET['ypTypeExec']."', 
		yp_author='".$_GET['ypAuthor']."' WHERE yp_id=".$_GET['ypId']);

	header("Location: 5.php");
	exit;
?>