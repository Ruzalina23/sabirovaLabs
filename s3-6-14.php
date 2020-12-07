<?php
echo 'Вариант 14. <br>';
$n = $_POST['n'];
$count = 0;
for ($i=0; $i<=strlen($n); ++$i) 
{$a=mb_substr($n, $i, 1, "UTF-8");
	if ($a==mb_substr($_POST['s1'], 0, 1, "UTF-8"))
		$count++;
}
echo ' Количество символов "' . $_POST['s1'] . '" в веденной строке: ' . $count;

?>