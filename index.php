<?php

$s = array(
    '国語' => 80,
    '数学' => 70,
    '英語' => 60
);

$s['英語']+= 15;
echo $s['英語'];

$c = array('赤','青','黄');
echo $c[0];
$c[]='白';
echo $c[3];

for($i=1;$i<=100;$i++){
    if($i%3===0 && $i%5===0){
        echo $i;
        echo 'FizzBuzz';
    }elseif($i%3===0){
        echo $i;
        echo 'Fizz';
    }else if($i%5===0){
        echo $i;
        echo 'Buzz';
    }else{
        echo $i;
    }
    echo '<br>';

    
}
?>

