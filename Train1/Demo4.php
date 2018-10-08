<?php
$str='你好啊';
echo mb_strlen($str,'utf-8');
echo '<br/>';
echo mb_substr($str,0,2,'GBK');
?>