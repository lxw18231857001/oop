<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15
 * Time: 23:17
 */

function __autoload($classname)
{
    require $classname.'.php';
}


$computer=new Computer();
var_dump($computer);

