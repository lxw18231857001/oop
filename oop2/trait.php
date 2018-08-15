<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/16
 * Time: 0:18
 */

trait Bt{
    public function abtest()
    {
        echo 'hello<br>';
    }
    public function cdtest()
    {
        echo 'world<br>';
    }

    public function ab()
    {
        $this->abtest();
        $this->cdtest();
    }
}
class Test{
    use Bt;
}
$obj=new Test();
$obj->ab();//hello world