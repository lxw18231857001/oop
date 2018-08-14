<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/10
 * Time: 21:46
 */
class  Human
{
    public $name;
    public $age;
    public $sex;
//    public $height;
    private $is_hungrg = true;
    public static $sValue='in the Humen class';

    public function eat($foods)
    {
        echo $this->name . 'is eating' . $foods . "<br>";
    }

    public function info()
    {
        return 'Human' . $this->name . $this->is_hungrg . '<br>';
    }
}

/*
 * 以关键字class开头，类名称大驼峰格式
 *
 * */

class NbaPlayer extends Human
{
    //属性的定义
    /*  public $name='lxw';
      public $age=24;
      public $sex='men';*/
    private $height = '175';
    public static $president = 'David';

    public static function changePresident($newPresident)
    {
        self::$president=$newPresident;
        echo parent::$sValue."<br>";
     }

    //构造函数 在对象被实例化的时候自动调用
    function __construct($name, $age, $sex)
    {
        echo "In NbaPlayer construct<br>";
        //$this是PHP里面的伪变量，表示对象自身。可以用$this->的方式访问对象的属性和方法
        //继承父类后，父类中的属性可以通过$this->访问
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
//        $this->height = $height;
    }

    //方法的定义
    public function run()
    {
        echo "running<br>";
    }

    public function jump()
    {
        echo "jumpping<br>";
    }

    public function getHeight()
    {
        echo $this->name . 'height is ' . ($this->height + 5) . '<br>';
    }

//析构方法会在程序结束后自动调用
    function __destruct()
    {
        echo '=====destruct====<br>';
    }


}


/*类的实例化
 *类实例化为对象时，使用关键字new，new后跟着类的名字和一个小括号
 * */

/*$lxw= new NbaPlayer('lxw222','12','men','176');
//对象中的成员属性可以通过->来访问
echo $lxw->name."<br>";

//对象中成员方法可以通过->来访问
$lxw->run();
$lxw->jump();

//每一次用new实例化对象时，构造函数都会调用类名后面括号内的参数列表
$lxw2=new NbaPlayer('lxw2','33','men','175');
echo $lxw2->name.'<br>';
echo $lxw2->age.'<br>';
echo $lxw2->sex.'<br>';
echo $lxw2->height.'<br>';
//    通过把变量设置为null,可以触发析构函数的调用
$lxw2=null;
echo 'from the lxw2 not used<br>';*/
/*
$player = new NbaPlayer('rlw', '22', 'women');
echo $player->name . '<br>';
$player->eat('apple');//在子类的对象上可以直接访问父类中定义的方法和属性

$player->getHeight() . '<br>';
echo $player->info();*/

echo NbaPlayer::$president.'&nbsp;&nbsp;before<br>';
NbaPlayer::changePresident('Tom');
echo NbaPlayer::$president;

