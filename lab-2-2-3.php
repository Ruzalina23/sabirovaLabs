<?php
$cust[cnum] = "2001";
$cust[cname] = "Hoffman";
$cust[city] = "London";
$cust[snum] = "1001";
echo '<b>1)Ассоциативный массив:</b> ';
echo "<pre>";
print_r ($cust); 
echo "</pre>";

echo '<b>2)Добавили ключ rating: </b>';
$cust[rating]='100';
echo "<pre>";
print_r ($cust); 
echo "</pre>";

echo '<b>3)Отсортированный массив по значениям: </b>';
asort($cust);
echo "<pre>";
print_r ($cust); 
echo "</pre>";
/*for ($i=0; $i<count($cust);$i++)
{echo $cust[$i] . '&nbsp; &nbsp;';}*/

echo '<br><b> 4)Отсортированный массив по ключам: </b>';
ksort($cust);
echo "<pre>";
print_r ($cust); 
echo "</pre>";

echo '<b>5)Отсортированный массив с помощью функции sort(): </b>';
sort ($cust);
echo "<pre>";
print_r ($cust); 
echo "</pre>";
?>