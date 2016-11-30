<?php
/**
 * biref:
 * Autor: DanceHill<Mrluchanglong@163.com>
 * Date: 2016/11/30
 * Time: 11:25
 * QQ:243514438
 * Copyright：www.luchanglong.com.cn
 */

namespace app\api\controller;


class Index
{
    function Index()
    {
        $data = ['name' => 'thinkphp', 'url' => 'thinkphp.cn'];
        return ['data' => $data, 'code' => 1, 'message' => '操作完成'];
    }
}