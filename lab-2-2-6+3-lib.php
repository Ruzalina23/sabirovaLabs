<?php
function f1 (&$a,$n=10,$m=10){
	$k=1;
	$tr=0;
	$td=0;
while ($k <= $n * $m){
        $a[$tr][$td] = $k;
        if ($tr == $Ibeg && $td < $m - $Jfin - 1)
            $td++;
        else if ($td == $m - $Jfin - 1 && $tr < $n - $Ifin - 1)
            $tr++;
        else if ($tr == $n - $Ifin - 1 && $td > $Jbeg)
            $td--;
        else
            $tr--;

        if (($tr == $Ibeg + 1) && ($td == $Jbeg) && ($Jbeg != $m - $Jfin - 1)){
            $Ibeg++;
            $Ifin++;
            $Jbeg++;
            $Jfin++;
        }
        $k++;
    }

}
function f3 (){
echo '14. Заполнить квадратную матрицу 10x10 последовательными числами от 1 до 100 по спирали. <br><br>';
}

function f2 ($a){
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
?>
