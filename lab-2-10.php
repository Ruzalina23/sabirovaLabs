<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) {
echo ("<tr>");
for ($k=1; $k<=10; $k++) {
if ($k % 2 == 0)
$textColor = 'red';
else $textColor = 'black';
echo ("<td align=center>");
$p=$i*$k;
echo ("<font color=" . $textColor . ">" . $p . "</font>");
echo ("</td>");
}
echo ("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>