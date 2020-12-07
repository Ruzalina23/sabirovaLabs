<html> <body>
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
 
 /*$zapros="UPDATE user SET user_name='".$_GET['name']."', user_login='".$_GET['login']."', user_password='" .$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']."' WHERE id_user=" .$_GET['id_user'];*/
 
$zapros="UPDATE user SET user_name='".$_GET['name']."', user_login='".$_GET['login']."', user_password='" .$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']."' WHERE id_user=" .$_GET['id'];

mysqli_query($link, $zapros);
  
if (mysqli_affected_rows($link)>0) {
echo 'Все сохранено. <a href="4.php"> Вернуться к спискупользователей </a>'; }
 else { echo 'Ошибка сохранения. <a href="4.php">
Вернуться к списку пользователей</a> '; }
?>

</body> </html>