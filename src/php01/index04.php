<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;
echo $a+$b, "<br>", $a-$b, "<br>", $a*$b, "<br>", $a/$b, "<br>", $a%$c, '<br>';

$b *= $c;/*b=30*/
$b /= $c; /*b=3 */
$d *= $b;

echo $b, '<br>', $d,'<br>';

$aaa = 20;
$bbb = 5;

echo '$aaa>$bbbの結果  →', $aaa>$bbb, '<br>';

echo '$aaa>10 and $aaa<30の結果→  ',$aaa>10 and $aaa<30, '<br>';

$aa = 10;
$bb = 10;
$cc = 5;
$dd = 5;

echo ++$aa, '<br>', $bb++, '<br>', --$cc, '<br>', $dd--, '<br>';
