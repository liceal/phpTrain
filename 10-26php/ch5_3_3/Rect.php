<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.10.29
 * Time: 16:32
 */

class Rect extends shape
{
    public $w;
    public $h;

    public function __construct($name,$w,$h)
    {
        parent::__construct($name);
        $this->w=$w;
        $this->h=$h;
    }
    public function getArea()
    {
        return $this->w*$this->h;
    }

    public function __toString()
    {
        return ' 名称：'.$this->name.' 宽：'.$this->w.' 高：'.$this->h;
    }


}