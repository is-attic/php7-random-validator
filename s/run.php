<?php

function random($len=32, $type=0)
{
  if ($type) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  } else {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  $str = '';
  for ($i = 0; $i < $len; $i++) {
    $str .= $chars[random_int(0, strlen($chars) - 1)];
  }
  return $str;
}

function createGuid(){
  if (function_exists('com_create_guid')){
    return com_create_guid();
  }else{
    mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
    $charid = strtoupper(md5(uniqid(rand(), true)));
    $hyphen = chr(45);// "-"
    $guid = substr($charid, 0, 8).$hyphen
      .substr($charid, 8, 4).$hyphen
      .substr($charid,12, 4).$hyphen
      .substr($charid,16, 4).$hyphen
      .substr($charid,20,12);
    return $guid;
  }
}

$name = $argv[1];
$times = intval($argv[2]);

for ($i = 0;  $i < $times; $i++) {
  echo random();
  echo "\n";
}

?>
