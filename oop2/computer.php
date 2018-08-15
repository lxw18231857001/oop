<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15
 * Time: 22:13
 */
class Computer
{
    public $cpu = 'amd333';
    public $mianbroad = '华硕333';
    private $hd = 5102;

    public function game()
    {
        if ($this->getHdSize()<1024){
            echo '玩不了游戏';
        return false;
        }
        return true;
    }

    public function job()
    {
        echo $this->game();
    }

    public function getHdSize()
    {
        return $this->hd;
    }

}

$obj=new Computer();
$obj->game();