<?php
 $a=rand(-20,20);
 $c=rand(-20,20);
 $d=rand(-20,20);
 echo ('a=' . $a . '<br>');
   echo ('c=' . $c . '<br>');
    echo ('d=' . $d . '<br>');
 echo ('Формула и результат: ' . '(' . $c . '/' . $d . '+' . 3 . '*' . $a . '/' . 2 . ')/(' . $c . '-' . $a . '+' . 1 . ')=' );
 echo ( ($c/$d+(3*$a/2))/($c-$a+1) );
?>