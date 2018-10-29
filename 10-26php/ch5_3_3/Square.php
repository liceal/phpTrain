<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.10.29
 * Time: 16:39
 */

class Square extends Rect
{
    public function __construct($name, $w, $h)
    {
        parent::__construct($name, $w, $h);
    }

    public function __toString()
    {
        return parent::__toString();
    }


}