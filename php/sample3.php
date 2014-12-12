<?php
$ary = array_fill(0, 1000000, 5000);
// 這三個迴圈，哪個最慢？哪個最快？
// 每個迴圈怎麼加速？

$s = microtime(TRUE);
for($i = 0; $i < count($ary); $i++){
  $ary[$i] = $ary[$i]*2+$i;
}
$e = microtime(TRUE);
print $e-$s."\n";

$s = microtime(TRUE);
$i = 0;
while($i < count($ary)){
  $ary[$i] = $ary[$i]*2+$i;
  $i++;
}
$e = microtime(TRUE);
print $e-$s."\n";


$s = microtime(TRUE);
foreach($ary as $i => $a){
  $ary[$i] = $a*2+$i;
}
$e = microtime(TRUE);
print $e-$s."\n";

