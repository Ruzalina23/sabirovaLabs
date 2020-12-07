<html>
<head>
<title> Редактирование данных о языке программирования </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "sabirova" , "d7L390nNHD12ASqe") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
};
mysqli_query($link,'SET NAMES utf-8'); // Тип кодировки
mysqli_select_db($link, "sabirova") or die("Нет такой таблицы!");

$rows=mysqli_query($link, "SELECT  yaz_name, yaz_tip, yaz_god, yaz_tipv, yaz_avt FROM yaz WHERE id_yaz= " . $_GET['id_yaz']);
 while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id_yaz'];
 $name = $st['yaz_name'];
 $tip = $st['yaz_tip'];
 $god = $st['yaz_god'];
 $tipv = $st['yaz_tipv'];
 $avt = $st['yaz_avt'];
 }
print "<form action='save_editsr.php' metod='get'>";
print "Имя: <input name='name' size='50' type='text' value='".$name."'>";
print "<br>Тип: <input name='tip' size='20' type='text' value='".$tip."'>";
print "<br>Год разработки: <input name='god' size='20' type='int' value='".$god."'>";
print "<br>Тип выполнения: <input name='tipv' size='20' type='text' value='".$tipv."'>";
print "<br>Автор: <input name='avt' size='50' type='text' value='".$avt."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"4sr.php\"> Вернуться к списку пользователей </a>";
?>
</body>
</html>
