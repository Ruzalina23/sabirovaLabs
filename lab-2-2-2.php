<?php

$n=rand (3,20);
echo '<b>Случайное число (3-20): </b>' . $n . '<br>';
echo '<b>Массив из </b>' . $n . ' <b>элементов, заполненный случайными числами:</b> ';
for ($i=0; $i<$n; $i++)
{
	$mas[$i]=rand(10,99);
	echo $mas[$i] . '&nbsp; &nbsp;';
}
echo '<br><b> Массив в отсортированном виде: </b>';
sort ($mas);
for ($i=0; $i<count($mas);$i++)
{echo $mas[$i] . '&nbsp; &nbsp;';}
echo '<br> <b>Элементы массива в обратном порядке: </b>';
$mas1=array_reverse ($mas);
for ($i=0; $i<count($mas1);$i++)
{echo $mas1[$i] . '&nbsp; &nbsp;';}
echo '<br> <b>Массив после удаления последнего элемента: </b>';
array_pop($mas1);
for ($i=0; $i<count($mas1);$i++)
{echo $mas1[$i] . '&nbsp; &nbsp;';}
$sum=array_sum ($mas1);
echo '<br> <b>Сумма элементов массива:</b> ' . $sum;
$count=(count ($mas1));
echo '<br><b> Количество элементов в массиве:</b> ' . $count ;
$sr=$sum/$count;
echo '<br> <b>Среднее арифметическое для элементов массива: </b>' .  $sr;
if (in_array (50,$mas1))
{
	echo '<br> <b>Число 50 есть в массиве</b>';
}
else 
	{
	echo '<br><b>В массиве нет числа 50</b>';
}
echo '<br><b> Массива из уникальных значений:</b> ';
$mas2=array_unique($mas1);
for ($i=0; $i<=count($mas1);$i++)
{echo $mas2[$i] . '&nbsp; &nbsp;';}
?>