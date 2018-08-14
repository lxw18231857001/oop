<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 19:20
 */
class Base
{
    public function test()
    {
        echo 'in the Base.test<br>';
    }

    public final function test2()
    {
        echo 'in the Base.test2<br>';
    }
}

class Child extends Base
{
    const CONST_VALUE='this is a const value';
    public $age=22;
    public function test($param = null)
    {
        echo 'in the child.test &nbsp;' . $param . '<br> ';
        parent::test();

        self::called();
        echo self::CONST_VALUE.'<br>';
        echo $this->age.'<br>';
//        echo self::$age;   //不能访问自身的属性
    }

    public function called()
    {
        echo 'the Child called is used<br>';
    }
//     public function test2()
//    {
//        echo 'in the child.test2<br>';
//    }
}

$obj = new Child();
$obj->test('lxw');
//$obj->test2();















