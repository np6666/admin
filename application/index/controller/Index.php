<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo '我是测试数据123';
    }
    public function getInfo()
    {
        return {
            type: 8002,
            a: '数据1',
            b: '数据2',
            c: '数据3',
            d: {
                a: '二维数据1',
                b: '二维数据2'
            }
        }
    }
}
