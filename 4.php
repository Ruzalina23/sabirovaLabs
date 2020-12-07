<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
$link = mysqli_connect("localhost", "sabirova" , "d7L390nNHD12ASqe") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

 //mysql_connect("localhost", "sabirova" , " d7L390nNHD12ASqe") 
 
 mysqli_query($link,'SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
 
 mysqli_select_db($link, "sabirova") or die("Нет такой таблицы!");
?>

<h2>Зарегистрированные пользователи:</h2>
<table border="1">
 <th> Имя </th> <th> E-mail </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php

$result=mysqli_query($link, "SELECT id_user, user_name, user_e_mail FROM user"); // запрос на выборку сведений о пользователях

/*if (!$result) {
    $message  = 'Неверный запрос: ' . mysqli_error() . "\n";
    $message .= 'Запрос целиком: ' . $link;
    die($message);
}*/

while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
 echo "<td><a href='edit.php?id_user=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id_user=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>
</body> </html>