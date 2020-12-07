<?php
echo 'Вариант 11. <br>';
$text = str_replace($_POST['s1'], $_POST['s2'], $_POST['n']);
echo 'Полученный текст: ' . $text;
?>