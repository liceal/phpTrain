<?php
header('Content-Type:text/html;charset=utf-8');
include 'goods.php';
include 'mobile.php';
include 'book.php';


$temp1=new book('吕时海环游记','1$','吕时海','旭阳240科技无限公司');
echo $temp1;
echo '<br/>';
$temp2=new mobile('吕时海','999$','vjvj','red');
echo $temp2;
?>