<?php
function funct($u,$t){
	if ($u<-2)
		return 2*$u;
	elseif ($u>=-2 && $u<=2)
		return sin($u*$u*$u)+log(abs($t));
	elseif ($u>2)
		return pow((1+cos(2*$u))/2 + (1/4)*(pow((1-cos (2*$t*$t*$t)),2)),1/4);
}
$a=rand(-100,100);
$b=rand(-100,100);
echo 'a=' . $a . '<br>b=' . $b;
$z=log (abs(funct($a,$b)))+funct($a*$a,$a+$b);
echo '<br> z=' . $z;
?>