<?php
/**
 * Created by PhpStorm.
 * User: huyanping
 * Date: 14-10-4
 * Time: 下午3:43
 *
 * 证明可以监听多个端口
 */


$context = new ZMQContext(1);
$server = new ZMQSocket($context, ZMQ::SOCKET_REP);
$server->bind('tcp://*:5555');

$context2 = new ZMQContext(1);
$server2 = new ZMQSocket($context, ZMQ::SOCKET_REP);
$server2->bind('tcp://*:5556');

while(true){
    echo $server->recv();
    $server->send('eee');

    echo $server2->recv();
    $server2->send('dddd');
}

