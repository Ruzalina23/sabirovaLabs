<?php
 // Подключение к базе данных:
$link = mysqli_connect("localhost", "sabirova" , "d7L390nNHD12ASqe") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
};
mysqli_query($link,'SET NAMES utf-8'); // Тип кодировки
mysqli_select_db($link, "sabirova") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO yaz SET yaz_name='" . $_GET['name']
."', yaz_tip='".$_GET['tip']."', yaz_god='"
.$_GET['god']."', yaz_tipv='".$_GET['tipv'].
"', yaz_avt='".$_GET['avt']. "'";
 mysqli_query($link, $sql_add); // Выполнение запроса
 
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, язык программирования зарегистрирован в базе данных.";
 print "<p><a href=\"4sr.php\"> Вернуться к списку
языков </a>"; }
 else { print "Ошибка сохранения. <a href=\"4sr.php\">
Вернуться к списку языков </a>"; }
?>