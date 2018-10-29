<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.10.29
 * Time: 16:26
 */

abstract class shape
{
    public function getArea(){}
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }


}
?>