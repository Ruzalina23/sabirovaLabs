<HTML>
<HEAD> <TITLE> Задача 3.3 </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> <b>Нечетный вариант </b> <br> <br>
Введите число N: <INPUT type="text" name="n" size="3">

<P> действие: 
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> четные
 <OPTION VALUE="2"> нечетные
 <OPTION VALUE="3"> простые
  <OPTION VALUE="4"> составные
 </SELECT>
 <P> <INPUT type="submit" value="Вперёд!">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</FORM>

<?php
switch ($_POST["z"]) {
 case 1:
 // 1 — четные
	{echo 'Результат: ' ;
	for ($i=1; $i<=($_POST['n']); ++$i)
		{if (($i%2)==0)
		{echo $i . ' ';
		}
		}
		break;
	}
	
 case 2:
 // 2 — нечетные
	{echo 'Результат: ' ;
	for ($i=1; $i<=($_POST['n']); ++$i)
		{if (($i%2)==1)
		{echo $i . ' ';
		}
		}
		break;
	}
 
 case 3:
 // 3 — простые
	{echo 'Результат: ' ;
	for ($i=2; $i<=($_POST['n']); ++$i)
	{
		for($j=2; $j<$i;++$j)
		{
			if (($i%$j)==0)
			{break;}
		}
		if ($i==$j)
		{
			echo $i . ' ';
		}
	}
		break;
	}
  
  case 4:
 // 4 — составные
	{echo 'Результат: ' ;
	for ($i=2; $i<=($_POST['n']); ++$i)
	{
		for($j=2; $j<=sqrt($i);++$j)
		{
			$m=$i%$j;
			if ($m==0)
			{
				echo $i . ' ';
				break;
			}
		}
	}
		break;
	}
}
?>
</BODY> </HTML>