<?php
/**
 * biref:
 * Autor: DanceHill<Mrluchanglong@163.com>
 * Date: 2016/11/30
 * Time: 16:57
 * QQ:243514438
 * Copyright：www.luchanglong.com.cn
 */

namespace app\install\controller;
use think\Controller;

class Index extends Controller
{

    protected function _initialize()
    {
        if (is_file(APP_PATH . DIRECTORY_SEPARATOR . 'install.lock')) {
            $this->error('已经成功安装了本系统，请不要重复安装!', 'http://'.$_SERVER['HTTP_HOST']);
        }
    }
    public function index(){
      return view();
    }

    public function step2()
    {
        return view();
    }
    public function step3()
    {
        return view();
    }
}