<?php 
$a = 15;
$callable = function() use ($a){
    return $a;
};
$a = "abc";
echo $callable();
echo PHP_EOL;
echo $a;