<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15
 * Time: 0:48
 */
class NbaPlayer
{
    public $name;
    public function __clone()
    {
        $this->name='lxw';
    }
}

$james=new NbaPlayer();
echo $james->name='james.<br>';
$james2=clone $james;
echo 'before set up:'.$james2->name.'<br>';
echo 'james name:'.$james2->name='james2<br>';