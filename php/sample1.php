<?php
function &bar(&$b){
  //$a = ++$b;
  $b++;
  $a =& $b;
  return $a;
}
function foo(&$b){
  $b++;
}

$b = 1;
$a = bar($b);
var_dump($a);
var_dump($b);


// 這個程式會印出什麼？
// 要怎麼印出 3?
