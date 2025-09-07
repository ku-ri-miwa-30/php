<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
print '私の名前は'.$name.'<br>';

$marchan = htmlspecialchars($_GET['marchan'], ENT_QUOTES);
echo 'ご希望の商品は'.$marchan.'<br>';

$num = htmlspecialchars($_GET['number'], ENT_QUOTES);
echo '注文数は、'.$num.'<br>';

