<?php
echo 'Вариант 17. <br>';
$n = $_POST['n'];
if( preg_match( '~^[\d]+$~', $n ) )
        echo 1;
    elseif( preg_match( '~^[\d]+\.[\d]+$~', $n ) )
        echo 2;
    elseif(((int)$n)==0)
        echo 0;
?>