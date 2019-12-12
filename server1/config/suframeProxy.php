<?php

return [
    'driver' => 'suframe',
    'path' => '/news',
    'name' => 'news', //用于接口生成命名空间
    'host' => '127.0.0.1',
    'port' => '8090',
    'rpcPort' => '8091',
    'timeout' => 2.5,
    'apiGetway' => [
        'enable' => false,
        'host' => '',
        'port' => '',
    ],
    'registerServer' => [
        'host' => '127.0.0.1',
        'port' => 8091
    ],
    'services' => [
        'suframe' => \suframe\think\services\SuframeService::class
    ]
];
