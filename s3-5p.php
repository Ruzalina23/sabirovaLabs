<?php
echo ($_POST["n"]);
echo ("<hr>");
echo "Результат анкетирования <br>";
$otv=array (1 => n,n,y,n,n,n,n,n,y,y,n,n,y,y,n,n,n,n,y,n);
$ball=0;
if (($_POST["d1"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d2"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d3"])=='y')
{
	$ball=$ball+1;
}
if (($_POST["d4"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d5"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d6"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d7"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d8"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d9"])=='y')
{
	$ball=$ball+1;
}
if (($_POST["d10"])=='y')
{
	$ball=$ball+1;
}
if (($_POST["d11"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d12"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d13"])=='y')
{
	$ball=$ball+1;
}
if (($_POST["d14"])=='y')
{
	$ball=$ball+1;
}
if (($_POST["d15"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d16"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d17"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d18"])=='n')
{
	$ball=$ball+1;
}
if (($_POST["d19"])=='y')
{
	$ball=$ball+1;
}
if (($_POST["d20"])=='n')
{
	$ball=$ball+1;
}
if ($ball>15)
	{
		echo $ball;
	echo "<br>У Вас покладистый характер";
	}
	else if (($ball <= 15) && ($ball >= 8))
	{
		echo $ball;
	echo "<br>Вы не лишены недостатков, но с вами можно ладить";
	}
	else if ($ball<8)
	{
		echo $ball;
	echo "<br>Вашим друзьям можно посочувствовать";
	}
	
?>