<?php
header('Content-Type:text/html;charset=utf8');
$link=mysqli_connect('localhost','root','root','mymessages');
$link or die('连接失败'.mysqli_error($link));
?>