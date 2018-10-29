<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.10.29
 * Time: 15:38
 */
class book extends goods
{
    public $writer;
    public $press;

    public function __construct($name,$money,$writer,$press)
    {
        $this->name=$name;
        $this->money=$money;
        $this->writer=$writer;
        $this->press=$press;
    }

    public function __toString()
    {
        return '名字：'.$this->name.' 价值：'.$this->money.' 作者：'.$this->writer.' 出版社：'.$this->press;
    }

}