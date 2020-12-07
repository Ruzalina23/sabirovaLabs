<?php
function funct($u,$t){
	if ($u>2)
		return pow((($u*$u)+$t),1/3)*((1-cos(2*$t))/2);
	elseif ($u<=2)
		return log(abs((($u*$u)/$u+$t)));
}
$a=rand(-100,100);
$b=rand(-100,100);
echo 'a=' . $a . '<br>b=' . $b;
$z=sin (funct($b,$a))+sqrt (abs(funct($a,$b)));
echo '<br> z= ' . $z;
?>