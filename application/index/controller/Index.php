<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 123456;
    }
    public function getinfo()
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
        };
    }
}
