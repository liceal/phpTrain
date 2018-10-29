<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.10.29
 * Time: 15:26
 */
class goods
{
    public $name;
    public $money;

    public function __construct($name,$money)
    {
        $this->name=$name;
        $this->money=$money;
    }

    public function __get($name)
    {
        return $name;
    }

}

?>