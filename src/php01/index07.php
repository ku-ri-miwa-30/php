<?php
function num_func($num1, $num2)
{
    $value=$num1+$num2;
    return $value;
}

$total=num_func(2,3);
echo $total,'<br>';

function test_func($score1,$score2,$score3)
{
    $result=$score1+$score2+$score3;

    if($result>210)
    {
        echo '合計点は'.$result.'なので合格です'.'<br>';
    }
    else    
    {
        echo '合計点は'.$result.'なので不合格です'.'<br>';
    }

}

test_func(50,50,150);

function triangle($teihen, $hight)
{
    $result=$teihen*$hight/2;
    return $result;

}

function sikaku($tate, $yoko)
{
    $result=$tate*$yoko;
    return $result;
}

function daikei($upp, $down, $haight)
{
    $result = ($upp+$down)*$haight/2;
    return $result;

}


$sankaku_kekka = triangle(60, 70);
echo $sankaku_kekka.'<br>';

$sikaku_keeka = sikaku(20, 40);
echo $sikaku_keeka.'<br>';

$daikei_kekka = daikei(12, 30, 89);
echo $daikei_kekka.'<br>';
