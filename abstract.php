<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 22:55
 */
abstract class ACanEat
{
    abstract public function eat($food);

    public function breath()
    {
        echo 'breath use air <br>';
    }
}

class Humen extends ACanEat
{
     public function eat($food)
    {
        echo 'humen eating ' . $food . '<br>';
    }
}

class Animal extends ACanEat
{
//    继承抽象类的子类中需要实现抽象类中定义的抽象方法。
    public function eat($food)
    {
        echo 'Animal eating ' . $food . '<br>';
    }
}

$animal=new Animal;
$animal->eat('banana');
$animal->breath();





