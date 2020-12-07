<?php
$s=Sabirova_php;
$m=Yana_php;
$i=Polina_php;
$d=Misha_php;

if ($_POST["n"]==$s)
{echo "Здравствуйте, Сабирова Рузалина Ильшатовна" ;
exit;
}

else if ($_POST["n"]==$m)
{echo "Здравствуйте, Бравцева Яна Руслановна" ;
exit;
}

else if ($_POST["n"]==$i)
{echo "Здравствуйте, Валинарова Полина Сергеевна" ;
exit;
}

else if ($_POST["n"]==$d)
{echo "Здравствуйте, Миронов Михаил Германович" ;
exit;
}

else {
echo 'Вы не
зарегистрированный пользователь!';
}
?>