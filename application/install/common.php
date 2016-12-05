<?php
/**
 * biref:
 * Autor: DanceHill<Mrluchanglong@163.com>
 * Date: 2016/12/5
 * Time: 14:57
 * QQ:243514438
 * Copyright：www.la998.com
 */

function check_env()
{

    $env = array(
        'os' => array('操作系统', '不限制', PHP_OS, 'success'),  //success warning danger info
        'php' => array('PHP版本', '5.5', PHP_VERSION, 'success'),
        'upload' => array('附件上传', '不限制', '2M', 'success'),
        'gd' => array('GD库', '2.0', '未知', 'success'),
        'curl' => array('Curl扩展', '开启', '未知', 'success'),
        'disk' => array('磁盘空间', '200M', '未知', 'success'),
    );
    //检查php版本
    if ($env['php'][2] < $env['php'][1]) $env['php'][3] = 'danger';
    //检测附件上传
    if (@ini_get('file_uploads')) $env['upload'][2] = ini_get('upload_max_filesize');
    //GD库检测
    $tmp = function_exists('gd_info') ? gd_info() : array();
    if (empty($tmp['GD Version'])) {
        $env['gd'][2] = '未安装';
        $env['gd'][3] = 'danger';
        session('error', true);
    } else {
        $env['gd'][2] = $tmp['GD Version'];
    }
    unset($tmp);
    //curl检测
    $tmp = function_exists('curl_init') ? curl_version() : array();
    if (empty($tmp['version'])) {
        $env['curl'][2] = '未安装';
        $env['curl'][3] = 'danger';
    } else {
        $env['curl'][2] = $tmp['version'];
    }
    unset($tmp);
    //磁盘空间检测
    if (function_exists('disk_free_space')) {
        $env['disk'][2] = floor(disk_free_space(APP_PATH) / (1024 * 1024)) . 'M';
    }
    return $env;
}

function check_right()
{
    $item = array(
        array('dir', '可写', '可写', 'success', './public'),//success warning danger info
        array('dir', '可写', '可写', 'success', './runtime'),
        array('dir', '可写', '可写', 'success', './application/extra'),
        array('file', '可写', '可写', 'success', './application/database.php'),
    );
    foreach ($item as $key => $val) {
        if ($val['0'] == 'dir') {
            //目录
            if (is_dir(ROOT_PATH . $val[4])) {
                if (!is_writable(ROOT_PATH.$val[4])){
                    $item[$key][2] = '不可写';
                    $item[$key][3] = 'danger';
                }
            } else {
                $item[$key][2] = '不存在';
                $item[$key][3] = 'warning';
            }
        } else {
            //文件
            if(file_exists(ROOT_PATH.$val[4])){
                if (!is_writable(ROOT_PATH.$val[4])){
                    $item[$key][2] = '不可写';
                    $item[$key][3] = 'danger';
                }
            }else{
                $item[$key][2] = '不存在';
                $item[$key][3] = 'warning';
            }
        }
    }
    return $item;
}

