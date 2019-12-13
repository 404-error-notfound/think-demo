<?php
namespace app\rpc;

class GoodsService implements interfaces\GoodsInterface
{

    function get($name)
    {
        return 'hello ' . $name . ', i am goods';
    }

}