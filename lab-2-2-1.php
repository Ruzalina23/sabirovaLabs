<?php
for ($i=1; $i<=10; $i++)
{
	$treug[$i]=$i;
	$kvd[$i]=$i;
	//echo $treug[$i] . '&nbsp; &nbsp;';
}

echo '<br><b> 1) Массив "треугольных" чисел </b><br> ';
foreach($treug as $i=>$n)
{
	$treug[$i]=$n*($n+1)/2;
	echo $treug[$i] . '&nbsp; &nbsp;';
}

echo '<br> <br><b> 2) Массив квадтратов натуральных чисел</b> <br> ';
foreach($kvd as $i=>$n)
{
	$kvd[$i]=$i*$i;
	echo $kvd[$i] . '&nbsp; &nbsp;';
}

echo '<br> <br> <b>3) Объединенный массив </b><br> ';
$rez=array_merge($treug,$kvd);
for ($i=0; $i<count($rez);$i++)
{echo $rez[$i] . '&nbsp; &nbsp;';}

echo '<br> <br> <b>4) Отсортированный массив <br></b> ';
sort($rez);
for ($i=0; $i<count($rez);$i++)
{echo $rez[$i] . '&nbsp; &nbsp;';}

echo '<br> <br><b> 5) Удалилили первый элемент массива <br></b> ';
array_shift ($rez);
for ($i=0; $i<count($rez);$i++)
{echo $rez[$i] . '&nbsp; &nbsp;';}

echo '<br> <br> <b>6) Удалили из массива повторяющиеся символы</b> <br> ';
$rez1=array_unique($rez);
for ($i=0; $i<count($rez);$i++)
{echo $rez1[$i] . '&nbsp; &nbsp;';}

/*$treug=array(1,2,3,4,5,6,7,8,9,10);
//$rez=array();
	echo ('1. <br> ');
	foreach ($treug as $i=>$n)
		{$treug[$i]=$n*($n+1)/2;
		echo ('&nbsp;&nbsp;' . $treug[$i]);
		}
	echo ('<br> 2. <br> ');
$kvd=array(1,2,3,4,5,6,7,8,9,10);
	foreach ($kvd as $a=>$b)
		{$kvd[$a]=$b*$b;
		echo ('&nbsp;&nbsp;' . $kvd[$a]);
		}
echo ('<br> 3. <br> ');
$rez=array_merge($treug, $kvd);
echo "<pre>";
print_r($rez);
echo "</pre>";
echo ('<br> 4. <br> ');
sort ($rez);
//reset($rez);
while (list($key, $val) = each($rez)) {
echo " " . $val . "\n";
}
echo ('<br> 5. <br> ');
//unset($ez[1]);
array_shift($rez);
echo "<pre>";
print_r($rez);
echo "</pre>";
echo ('<br> 6. <br> ');
$rez1 = array_unique($rez);
echo "<pre>";
print_r($rez1);
echo "</pre>";*/
?>