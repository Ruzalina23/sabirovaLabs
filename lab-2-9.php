<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) { // запускаем первый цикл
 echo ("<tr>"); // начало строки таблицы
 for ($k=1; $k<=10; $k++) { // запускаем второй цикл
 echo ("<td align=center>"); // открываем ячейку таблицы
 $p=$i*$k; // находим произведение двух чисел и...
 echo ($p); // выводим его,
 echo ("</td>"); // а потом закрываем ячейку
 }
 echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>




////////////////////////////////////////////////////////////////
<?
function MainAlg (&$num, &$counter, &$sum) {
echo '<br><dl><dt>Делители числа ' . $num . ':</dt><dd>';
for ($i = 1; $i <= $num; $i++)
if ($num % $i == 0) {
echo $i . ',&nbsp;';
$counter++; // счетчик для дружественности
$sum += $i; // сумма для характера
}
echo '</dd><dd>' . 'Кол-во делителей:&nbsp;' . $counter . '</dd><dl>';

$sum = $sum - 1 - $num; // Компенсация характера
}

$n = rand(1, 1000);
$m = rand(1, 1000);
$counterN = 0;
$counterM = 0;
$sumN = 0;
$sumM = 0;
echo 'n = ' . $n;
echo '<br>m = ' . $m;

MainAlg($n, $counterN, $sumN);
MainAlg($m, $counterM, $sumM);

if ($counterN == $counterM)
echo '<br>Чсла&nbsp;' . $n . '&nbsp;и&nbsp;' . $m . '&nbsp;<font color=green>являются дружественными</font>';
else
echo '<br>Чсла&nbsp;' . $n . '&nbsp;и&nbsp;' . $m . '&nbsp;<font color=red>не являются дружественными</font>';

echo '<br><br><br>Характер числа n (&nbsp;' . $n . '&nbsp;) =&nbsp;' . $sumN;
echo '<br>Характер числа m (&nbsp;' . $m . '&nbsp;) =&nbsp;' . $sumM;


$flag = false;
$counter = 0;
if (($sumN + $sumM) > 0) // если сумма характеров = 0, то числе нет
for ($i = min($n, $m); $i <= max($n, $m); $i++)
if (($i % 2 == 0) && ($i % ($sumN + $sumM) == 0)) {
if ($flag == false)
echo '<br><br><dl><dt><font color=green>Найденные</font> четные числа из интервала [&nbsp;' . min($n, $m) . '&nbsp;;&nbsp;' . max($n, $m) . '&nbsp;], которые делятся на сумму всех своих чисел (&nbsp;' . ($sumN + $sumM) . '&nbsp;):</dt><dd>';
if ($counter > 15) {
echo $i . ',&nbsp;<br>';
$counter = 0;
} else {
echo $i . ',&nbsp;';
$counter++;
}
$flag = true;
}
if ($flag == false)
echo '<br><br><dl><dt><font color=red>Не найдено</font> четных чисел из интервала [&nbsp;' . min($n, $m) . '&nbsp;;&nbsp;' . max($n, $m) . '&nbsp;], которые делятся на сумму всех своих чисел (&nbsp;' . ($sumN + $sumM) . '&nbsp;)!</dt></dl>';
else
echo '</dd></dt>';


if ($n < 500) {
$flag = false;
for ($i = 1; ($i ** 2) <= $n; $i++)
for ( $j = $i; ($j ** 2) <= $n; $j++) // цикл начинается с i чтобы небыло повторений в комбинациях
if ((($i ** 2) + ($j ** 2)) == $n) {
if ($flag == false)
echo '<br><dl><dt>Число n = &nbsp;' . $n . '&nbsp<font color=green>можно</font> представить в виде сумммы квадратов:</dt>';
echo '<dd>' . $i . '^2&nbsp;+&nbsp;' . $j . '^2&nbsp;=&nbsp;' . $n . '</dd>';
$flag = true;
}
if ($flag == false)
echo '<br><dl><dt>Число n = &nbsp;' . $n . '&nbsp;<font color=red>нельзя</font> представить в виде сумммы квадратов двух чисел!</dt></dl>';
else
echo '</dl>';
} else
echo '<br><dl><dt>Число n = &nbsp;' . $n . '&nbsp;<font color=red>нельзя</font> представить в виде сумммы квадратов двух чисел (n слишком велико)!</dt></dl>';


$flag = false;
$counter = 0;
for ($i = min($n, $m); $i <= max($n, $m); $i++) {
for ($j = 1; ($j ** 3) <= $i; $j++)
for ( $k = $j; ($k ** 3) <= $i; $k++)
if (($j ** 3) + ($k ** 3) == $i) {
if ($flag == false)
echo '<br><dl><dt>Числа из интервала [&nbsp;' . min($n, $m) . '&nbsp;;&nbsp;' . max($n, $m) . '&nbsp;], которые <font color=green>можно</font> представить в виде суммы кубов двух чисел:</dt><dd>';
if ($counter > 5) {
echo $i . '&nbsp;(&nbsp;' . $j . '&nbsp;;&nbsp;' . $k . '&nbsp;),&nbsp;<br>';
$counter = 0;
} else {
echo $i . '&nbsp;(&nbsp;' . $j . '&nbsp;;&nbsp;' . $k . '&nbsp;),&nbsp;';
$counter++;
}
$flag = true;
}
}
if ($flag == false)
echo '<br><dl><dt>Ни одно число из интервала [&nbsp;' . min($n, $m) . '&nbsp;;&nbsp;' . max($n, $m) . '&nbsp;] <font color=red>нельзя</font> представить в виде суммы кубов двух чисел!</dt></dl>';
else
echo '</dd></dl>';


if ($n < 500) {
$flag = false;
for ($i = 1; ($i ** 2) <= $n; $i++)
for ( $j = $i; ($j ** 2) <= $n; $j++)
for ( $k = $j; ($k ** 2) <= $n; $k++)
if ((($i ** 2) + ($j ** 2) + ($k
 
** 2)) == $n) {
if ($flag == false)
echo '<br><dl><dt>Число n = &nbsp;' . $n . '&nbsp<font color=green>можно</font> представить в виде сумммы квадратов:</dt>';
echo '<dd>' . $i . '^2&nbsp;+&nbsp;' . $j . '^2&nbsp;+&nbsp;' . $k . '^2&nbsp;=&nbsp;' . $n . '</dd>';
$flag = true;
}
if ($flag == false)
echo '<br><dl><dt>Число n = &nbsp;' . $n . '&nbsp;<font color=red>нельзя</font> представить в виде сумммы квадратов трех чисел!</dt></dl>';
else
echo '</dl>';
} else
echo '<br><dl><dt>Число n = &nbsp;' . $n . '&nbsp;<font color=red>нельзя</font> представить в виде сумммы квадратов трех чисел (n слишком велико)!</dt></dl>';


$flag = false;
$counter = 0;
for ($i = min($n, $m); $i <= max($n, $m); $i++) {
for ($j = 1; ($j ** 3) <= $i; $j++)
for ( $k = $j; ($k ** 3) <= $i; $k++)
for ( $l = $k; ($l ** 3) <= $i; $l++)
if (($j ** 3) + ($k ** 3) + ($l ** 3) == $i) {
if ($flag == false)
echo '<br><dl><dt>Числа из интервала [&nbsp;' . min($n, $m) . '&nbsp;;&nbsp;' . max($n, $m) . '&nbsp;], которые <font color=green>можно</font> представить в виде суммы кубов трех чисел:</dt><dd>';
if ($counter > 5) {
echo $i . '&nbsp;(&nbsp;' . $j . '&nbsp;;&nbsp;' . $k . '&nbsp;;&nbsp;' . $l . '&nbsp;),&nbsp;<br>';
$counter = 0;
} else {
echo $i . '&nbsp;(&nbsp;' . $j . '&nbsp;;&nbsp;' . $k . '&nbsp;;&nbsp;' . $l . '&nbsp;),&nbsp;';
$counter++;
}
$flag = true;
}
}
if ($flag == false)
echo '<br><dl><dt>Ни одно число из интервала [&nbsp;' . min($n, $m) . '&nbsp;;&nbsp;' . max($n, $m) . '&nbsp;] <font color=red>нельзя</font> представить в виде суммы кубов трех чисел!</dt></dl>';
else
echo '</dd></dl>';
?>