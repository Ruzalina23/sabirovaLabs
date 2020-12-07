<?php
$link = mysqli_connect("localhost", "sabirova" , "d7L390nNHD12ASqe") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
};
mysqli_select_db($link, "sabirova") or die("Нет такой таблицы!");
$zapros="DELETE FROM user WHERE id_user = " . $_GET['id_user'];
mysqli_query($link, $zapros);
//mysqli_close($link);
header("Location: 4.php");
exit;
?>
