<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 22:56
 */
interface IcanEat
{
    public function eat($food);
}

class Humen implements IcanEat
{
    public function eat($food)
    {
        // TODO: Implement eat() method.
        echo 'humen is eating' . $food . "<br>";
    }
}

class Animal implements IcanEat
{
    public function eat($food)
    {
        // TODO: Implement eat() method.
        echo 'animal is eating' . $food . "<br>";
    }
}

$obj = new Humen();
$obj->eat('apple');
$animal = new Animal();
$animal->eat('banana');
var_dump($animal instanceof IcanEat);

interface IcanPee extends IcanEat
{
    public function pee();
}

class Humen2 implements IcanPee
{
    public function pee()
    {
        // TODO: Implement pee() method.

    }

    public function eat($food)
    {
        // TODO: Implement eat() method.
    }


}
