<?php
declare (strict_types = 1);

namespace app\admin\controller;

class Index
{
    public function index()
    {
        return '您好！这是一个[admin]示例应用';
    }

    /**
     * @return \think\response\View
     * 展示
     */
    public function login()
    {
        return view('./goods_list');
    }
}
