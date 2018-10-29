<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.10.29
 * Time: 15:49
 */
class mobile extends goods
{

    public $phoneName;
    public $phoneColor;

    public function __construct($name,$money,$phoneName,$phoneColor)
    {
        $this->name=$name;
        $this->money=$money;
        $this->phoneName=$phoneName;
        $this->phoneColor=$phoneColor;
    }

    public function __toString()
    {
        return '名字：'.$this->name.' 价值：'.$this->money.' 品牌：'.$this->phoneName.' 颜色：'.$this->phoneColor;
    }


}