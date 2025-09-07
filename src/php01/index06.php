<?php
for ($i = 1; $i <= 5; $i++)
{
    echo $i*2, '<br>';
}
echo '<br>', '<br>';
$count = 0;

while($count<20)
{
    $count += 1;
    echo $count, '<br>';
}
echo "<br>";
echo "<br>";

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i, "<br>";
  $i++;
}

echo "<br>";
echo "<br>";

$i = 0;

while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i, "<br>", "<br>";
  $i++;
}

$i=0;

while($i<10){
    if($i==5) {
        $i++;
        continue;   
    }
    echo $i;
    $i++;
}

echo '<br>', '<br>', '<br>';

$cocount=0;
while($cocount<=100) {
    if($cocount==20) {
        break;
    }
    $cocount++;
    echo $cocount, '<br>';
}

echo '<br>','<br>'; 

for($num=1; $num<51; $num++)
{
    if($num%15==0)
    {
        echo 'FizzBuzz', '<br>';
    }
    else if($num%3==0)
    {
        echo 'Fizz', '<br>';        
    }
    else if($num%5==0)
    {
        echo 'Buzz', '<br>';
    }
    else
    {
        echo $num, '<br>';
    }
}

for($dots1=0; $dots1<5; $dots1++)
{
    for($dots2=0; $dots2<5; $dots2++)
    {
        echo '●';

    }

    echo '<br>';
}

    

