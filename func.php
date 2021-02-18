<?php

$file_list = [];

function add_list ($file_name){
    global $file_list;
    array_push($file_list,$file_name.".php");
}

add_list("hello");

print($file_list[0]);
?>