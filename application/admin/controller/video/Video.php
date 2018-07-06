<?php
namespace app\admin\controller\video;
use app\admin\controller\Base;

class Video extends Base
{
    public function add(){
        return $this -> fetch();
    }

    public function lst(){
        return $this -> fetch();
    }
}