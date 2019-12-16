<?php
namespace app\controller;

use app\BaseController;
use rpc\contract\goods\GoodsInterface;
use rpc\contract\news\NewsInterface;

class Index extends BaseController
{
    public function index()
    {
        return 'server2';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'server 2 hello,' . $name;
    }

    public function rpctest(NewsInterface $news)
    {
        return $news->get('goods');
    }
}
