<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15
 * Time: 23:31
 */
class A
{
    public static function who()
    {
        echo 'A 类 who 方法';
    }
    public static function test()
    {
//        self::who();//A 类 who 方法
        static::who();//B 类 who  static 根据上下文后期绑定
    }
}
class B extends A
{
    public static function who()
    {
        echo 'B 类 who';
    }
}

B::test();
