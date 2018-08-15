<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15
 * Time: 23:44
 */

class Test{
    private $abc='';

    public function __set($var,$val)
    {
        $this->$var=$val;
    }

    public function __get($var)
    {
        return $this->$var;
    }
}

$test=new Test();
$test->abc='123';
var_dump($test->abc);