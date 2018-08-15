<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/16
 * Time: 0:03
 */

class A{
    public $age=0;
    public $username='';
    public $obj=null;
}

$a= new A();
$b= clone $a;  //深拷贝 结果：0
//$b=$a;  //浅拷贝 结果：1
$b->age=1;
var_dump($a->age);
