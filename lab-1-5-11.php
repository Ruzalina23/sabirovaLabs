<?php
 $a=rand(-20,20);
 $b=rand(-20,20);
 $c=rand(-20,20);
 $d=rand(-20,20);
 echo ('a=' . $a . '<br>');
  echo ('b=' . $b . '<br>');
   echo ('c=' . $c . '<br>');
    echo ('d=' . $d . '<br>');
 echo ('Формула и результат: ' . '((' . $c . '-' . $d . '/' . 2 . ')' . '*(' . $b . '-' . 7 . '))' . '/(' . 2 . '*' . $a . '-' . 1 . ')=');
 echo ( (($c-$d/2)*($b-7))/(2*$a-1) );
?>