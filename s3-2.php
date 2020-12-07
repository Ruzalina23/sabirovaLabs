<HTML>
<HEAD> <TITLE> Калькулятор </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> <b>Калькулятор </b> <br> <br>
а: <INPUT type="text" name="a" size="3">
b: <INPUT type="text" name="b" size="3">
<P> действие: 
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
  <OPTION VALUE="4"> разделить
 </SELECT>
 <P> <INPUT type="submit" value="Вперёд!">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</FORM>

<?php
switch ($_POST["z"]) {
 case 1:
 // 1 — сложить
 if (empty($_POST['a']) || empty($_POST['b'])) {
	echo 'Не переданы аргументы';
	break;}
	else {
  $c=$_POST["a"]+$_POST["b"];
 echo 'Результат сложения: ' ;
	echo ($_POST['a']."+".$_POST['b']." = ". $c);
	break;}
 
 case 2:
 // 2 — вычесть
 if (empty($_POST['a']) || empty($_POST['b'])) {
	echo 'Не переданы аргументы';
	break;}
	else {
 $c=$_POST["a"]-$_POST["b"];
 echo 'Результат вычитания: ';
 echo ($_POST['a']."-".$_POST['b']." = ". $c);
	break;}
 
 case 3:
 // 3 — умножить
 if (empty($_POST['a']) || empty($_POST['b'])) {
	echo 'Не переданы аргументы';
	break;}
	else {
 $c=$_POST["a"]*$_POST["b"];
 echo 'Результат умножения: ';
 echo ($_POST['a']."*".$_POST['b']. " = ". $c);
	break;}
  
  case 4:
 // 4 — разделить
 if (empty($_POST['a']) || empty($_POST['b'])) {
	echo 'Не переданы аргументы';
	break;}
	else {
 $c=$_POST["a"]/$_POST["b"];
 echo 'Результат деления: ';
 echo ($_POST['a']."/".$_POST['b']." = ". $c);
	break;}
}
?>
</BODY> </HTML>