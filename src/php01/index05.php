<?php
$a = 7;
if($a==5)
{
    echo "\$aは5です", '<br>';
}elseif($a==7){
    echo '$aは7です', '<br>';
}else{
    echo "\$aは5, 7以外です", '<br>';

}

$people = 'Saburo';
switch($people){
    case "Saburo":
        echo '三郎です', '<br>';
        break;

    case "Jiro":
        echo '次郎です', '<br>';
        break;

    default:
        echo '誰でもないです', '<br>';
        break;

}

$aaaaa=7;
$result=($aaaaa>5)?"TRUE" : "FALSE";
echo $result, '<br>';

