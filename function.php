<?php 

function views($path, $params=[]){
    extract($params);
    require "App/Views/{$path}.view.php";
}
function dd($var){
    return var_dump($var);
}

function redirect($path, $value =""){
    header("Location:{$path}?status={$value}");
}