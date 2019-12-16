<?php
namespace app\rpc;

class DemoService implements interfaces\DemoInterface
{

    function get($name)
    {
        return 'hello ' . $name . ', i am goods';
    }

}