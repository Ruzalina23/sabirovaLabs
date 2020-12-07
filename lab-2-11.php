<!DOCTYPE html>
<HTML>
<HEAD>
	<TITLE>
		Задача № 1-3
	</TITLE>
</HEAD>
	<BODY>
		<?
			$N = rand(1, 1000); 
			$sumN = 0;
			echo "N = " . $N;


			for ($i = 1; $i <= $N; $i++)
				if ($N % $i == 0)
					$sumN += $i; // сумма для характера
			$sumN = $sumN - 1 - $N; // компенсация характера

			echo "<br><br>Характер числа n (" . $N . ") = " . $sumN;

			$M = rand(1, 1000); 
			echo "<br><br>M = " . $M;

	     	$flag = false;
	     	$counter = 0;
		    for ($i = min($N, $M); $i <= max($N, $M); $i++) {
		    	for ($j = 1; ($j ** 3) <= $i; $j++)
			        for ( $k = $j; ($k ** 3) <= $i; $k++)
			        	if (($j ** 3) + ($k ** 3) == $i) {
			            	if ($flag == false)
			            		echo "<br><dl><dt>Числа из интервала [" . min($N, $M) . " ; " . max($N, $M) . "], которые <font color=green>можно</font> представить в виде суммы кубов двух чисел:</dt><dd>";
							if ($counter > 5) {
								echo $i . "(" . $j . ";" . $k . "), <br>";
								$counter = 0;
							} else {
				                echo $i . "(" . $j . ";" . $k . "), ";
				                $counter++;
				            }
			                $flag = true;
			            }
	        }
	        if ($flag == false) 
	        	echo "<br><dl><dt>Ни одно число из интервала [" . min($N, $M) . ";" . max($N, $M) . "] <font color=red>нельзя</font> представить в виде суммы кубов двух чисел!</dt></dl>";
	        else
	        	echo "</dd></dl>";
		?>
	</BODY>
</HTML>