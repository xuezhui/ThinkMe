<?php
/**
 * biref:
 * Autor: DanceHill<Mrluchanglong@163.com>
 * Date: 2016/11/30
 * Time: 16:57
 * QQ:243514438
 * Copyright：www.la998.com
 */

namespace app\install\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{

    protected function _initialize()
    {
        if (is_file(APP_PATH . DIRECTORY_SEPARATOR . 'install.lock')) {
            $this->error('已经成功安装了本系统，请不要重复安装!', 'http://' . $_SERVER['HTTP_HOST']);
        }
    }
    public function index()
    {
        return view();
    }
    public function step2()
    {
        $env = check_env();
        $right=check_right();
        $this->assign('env',$env);
        $this->assign('right',$right);
        return view();
    }
    public function step3()
    {
        if (Request::instance()->isPost()) {
            $data = Request::instance()->param();
            if (empty($data['db']['DB_HOST'])) $data['db']['DB_HOST'] = 'localhost';
            if (empty($data['db']['DB_NAME'])) $this->error('数据库名不能为空');
            if (empty($data['db']['DB_USER'])) $data['db']['DB_USER'] = 'root';
            if (empty($data['db']['DB_PWD'])) $data['db']['DB_PWD'] = '';
            if (empty($data['db']['DB_PORT'])) $data['db']['DB_PORT'] = '3306';
            if (empty($data['db']['DB_PREFIX'])) $data['db']['DB_PREFIX'] = '';
            if (empty($data['admin']['username'])) $data['admin']['username'] = 'admin';
            if (empty($data['admin']['pass'])) $this->error('管理员密码不能为空');
            session('db', $data['db']);
            session('admin', $data['admin']);
        }
        return view();
    }

}