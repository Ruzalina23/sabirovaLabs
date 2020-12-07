<?php
function f1(){
	echo '11. Заменить значение каждого элемента двумерной таблицы A(m,n) на сумму элементов,
соседних с ним в строке, оставляя границу массива неизменной. <br><br>';}

function f2 (&$a, $m=10, $n=10)
{for ($tr=0; $tr<$m; $tr++)
  {for ($td=0; $td<$n; $td++)
	{$a[$tr][$td]=rand (-10,10);
	}
  }
}

function f3 ($a){
	//echo '<h3>'
	echo '<table border="1">';
	for ($tr=0; $tr<count($a); $tr++)
  {	echo '<tr>';
    for ($td=0; $td <count($a[$tr]); $td++)
	{
		//$a[$tr][$td]=rand (0,10);
		//$formatText=sprintf("%.1f", $a[$tr][$td]);
		 echo '<td>'.$a[$tr][$td].'</td>';
	}
	echo '</tr>';
	}
	echo '</table>';
}

function f4(&$a, $m=10, $n=10){
echo '<table border="1">';
	for ($tr=0; $tr < $m; $tr++)
  {	echo '<tr>';
    for ($td=0; $td < $n; $td++)
	{	
		if ($tr==0)
		{
			$b[$tr][$td]=$a[0][$td];
			 echo '<td>'.$b[0][$td].'</td>';
		}
	  else if ($tr==($m-1))
	  {
		  $b[$tr][$td]=$a[$m-1][$td];
		   echo '<td>'.$b[$m-1][$td].'</td>';
	  }
	else if ($td==0)
		{
			$b[$tr][$td]=$a[$tr][0];
			 echo '<td>'. $b[$tr][0].'</td>';
		}
	else
		if ($td==($n-1))
	  {
		  $b[$tr][$td]=$a[$tr][$n-1];
		  echo '<td>'.$b[$tr][$n-1].'</td>';
	  }
	
	else
	 {
		 $b[$tr][$td]=$a[$tr][$td+1]+$a[$tr][$td]+$a[$tr][$td-1];
		  echo '<td>'.$b[$tr][$td].'</td>';	  
	 }
	}
	//echo '</tr>';
	}
	//echo '</table>';
}

?>