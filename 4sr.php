<html>
<head> <title> Сведения о языках программирования</title> </head>
<body>
<?php
$link = mysqli_connect("localhost", "sabirova" , "d7L390nNHD12ASqe") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($link,'SET NAMES utf-8'); // тип кодировки подключение к базе данных:
mysqli_select_db($link, "sabirova") or die("Нет такой таблицы!");
?>
<h2>Языки программирования</h2>
<table border="1">
<th> Название </th> <th> Тип </th> <th> Год разработки </th> <th> Тип выполнения</th> <th> Автор</th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>

<?php
$result=mysqli_query($link, "SELECT id_yaz, yaz_name, yaz_tip, yaz_god, yaz_tipv, yaz_avt FROM yaz"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['yaz_name'] . "</td>";
 echo "<td>" . $row['yaz_tip'] . "</td>";
 echo "<td>" . $row['yaz_god'] . "</td>";
 echo "<td>" . $row['yaz_tipv'] . "</td>";
 echo "<td>" . $row['yaz_avt'] . "</td>";
 echo "<td><a href='editsr.php?id_yaz=" . $row['id_yaz']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='deletesr.php?id_yaz=" . $row['id_yaz']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего языков: $num_rows </p>");
?>
<p> <a href="newsr.php"> Добавить язык </a>
</body> </html>