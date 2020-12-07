<?php
$n=20;
echo ' Количество элементов: ' . $n . '<br>  <br>Массив элементов: <br>';
for ($i=0; $i<$n; $i++)
{
	$a[$i]=rand(0,100)/10;
	echo 'a[' . $i . ']=' . $a[$i] . '<br>';
}
$c1=3;
$c2=11;
echo '<br> c1=' . $c1 . '<br> c2=' . $c2;
$amin=min($a);
echo '<br> <br>Min=' . $amin . '<br><br> Полученный массив: <br>';
for ($i=0; $i<$n; $i++)
{
	if (($c1<=$i) && ($i<=$c2))
	{
		$a[$i]=$amin;
		
	}
	echo 'a[' . $i . ']=' . $a[$i] . '<br>';
	
}
?>