<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 23:27
 */
class Magic
{
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'this is a __tostring<br>';
    }

    public function __invoke($x)
    {
        return 'this is in the __invoke:'.$x.'<br>';
    }
//方法的重载
//第一个参数就是调用的方法的名称，第二个参数就是方法调用的参数组成的数组
    public function __call($name,$params)
    {
        echo 'called '.$name.'with param:'.implode(',',$params).'<br>';
    }
// 静态方法的重载 注意这个方法需要设定static
    public static function __callStatic($name,$params)
    {
        echo 'static called '.$name.'with param:'.implode(',',$params).'<br>';
    }

    public function __get($name)
    {
        echo 'Getting the property:'.$name.'<br>';
    }

    public function __set($name,$value)
    {
        echo 'setting the '.$name.'to the value'.$value.'<br>';
    }

    public function __isset($name)
    {
        echo 'isset __invote<br>';
        return false;
    }

    public function __unset($name)
    {
        echo 'unsetting called:'.$name.'<br>';
    }



}

$obj=new Magic();
echo $obj;
echo $obj(3);

$obj->run('param1',"param2");
Magic::run('param3',"param4");

$obj->classname;
$obj->classname='classXXX';
echo '<br>';
echo 'isset called:'.isset($obj->classname).'<br>';
echo 'empty called:'.empty($obj->classname).'<br>';

unset($obj->classname);
