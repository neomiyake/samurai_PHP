<?php

$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num;
    global $odd_num;
    if($num % 2 == 0){
        array_push($even_num,$num);
    }else{
        array_push($odd_num,$num);
    }
}

sort_number(0);
sort_number(1);
var_dump($even_num,$odd_num);
?>