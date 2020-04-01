<?php

///-------------------------------------------- functions -------------------------------------------------------------\\\

function setValue($val , $file){
    $fp = fopen($file, 'w');
    fprintf($fp, '%d', $val);
    fclose($fp);
}

function getValue($file){
    $fp = fopen($file, 'r');
    fscanf($fp, '%d', $val);
    fclose($fp);
    return $val;
}

function CV ($file , $action) {
  if(!isset($_COOKIE[$action])) {
    setValue(getValue($file) + 1 , $file);
    setcookie($action , getValue($file) , time() + 2592000, '/' , FALSE, FALSE) ;
  } 
}
