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
        if (is_file(APP_PATH . DIRECTORY_SEPARATOR . 'extra/install.lock')) {
            $this->error('已经成功安装了本系统，请不要重复安装!', 'http://' . $_SERVER['HTTP_HOST']);
        }
    }
    public function index()
    {

        return view();
    }
    public function step2()
    {
        session('error',false);
        $env = check_env();
        $right=check_right();
        $func=check_func();
        $this->assign('env',$env);
        $this->assign('right',$right);
        $this->assign('func',$func);
        return view();
    }
    public function step3()
    {

        if(session('error')){
            session('error',false);
            $this->error('检测不通过，请检查系统环境和文件权限是否正确！');
        }
        return view();
    }

    public function step4(){

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

        $dbconfig=session('db');
        $admin=session('admin');
        if($dbconfig && $admin){
               //处理管理员密码

        }else{
          $this->error('配置丢失，请重新填写','step3');
        }
        return view();
    }

}