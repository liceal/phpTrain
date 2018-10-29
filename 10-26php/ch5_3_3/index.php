<?php
header('Content-Type:text/html;charset=utf-8');
require 'shape.php';
require 'Rect.php';
require 'Square.php';

$temp1=new Square('吕时海',300,300);
echo $temp1;
echo '<br/>';
echo $temp1->getArea();
?>