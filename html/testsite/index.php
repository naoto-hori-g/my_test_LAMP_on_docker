<?php
$array1 = [];
$array2 = [];

for($i = 0;$i < 200000;$i++){
    $array1[] = $i;
}

for($i = 0;$i < 200000;$i++){
    $array2[] = rand(0,200000);
}

 $count = count(array_intersect($array1,$array2));
 echo $count;
 
 
