<?php
// if_empty vs empty, 哪個快？
function if_empty($a){
  if($a === 0 || $a === NULL || $a === '' || !$a || $a === array()){
    return TRUE;
  }
  return FALSE;
}

$s = microtime(TRUE);
for($i = 0; $i < 1000000; $i++){
  if_empty($i%2);
}
$e = microtime(TRUE);
print $e-$s."\n";

$s = microtime(TRUE);
for($i = 0; $i < 1000000; $i++){
  empty($i%2);
}
$e = microtime(TRUE);
print $e-$s."\n";
