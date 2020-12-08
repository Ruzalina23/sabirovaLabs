<?php
	$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

	mysqli_query($link, "UPDATE application SET 
		app_yp_id='".$_GET['appYpId']."', 
		app_dev_id='".$_GET['appDevId']."', 
		app_data='".date("Y-m-d", strtotime($_GET['appData']))."', 
		app_vers='".$_GET['appVers']."', 
		app_name='".$_GET['appName']."' 
		WHERE app_id=".$_GET['appId']);

	header("Location: 5-2.php");
	exit;
?>