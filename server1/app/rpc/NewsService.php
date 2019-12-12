<?php
namespace app\rpc;

class NewsService implements interfaces\NewsInterface
{

    function get($name)
    {
        return 'hello ' . $name . ', i am goods';
    }

}