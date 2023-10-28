<?php

function add($x ,$y){
    return $x + $y;
}
 echo add(5,10);
 echo add(6,10);
 echo add(7,10);
function hello($x) {
    $user = $x;
    echo "hello " . $user;
    if($user==="hala"){
        echo "hello" .$user;
    }else{
        echo "bye". $user;
    }
}
hello("hala");
echo "<br>";






?>