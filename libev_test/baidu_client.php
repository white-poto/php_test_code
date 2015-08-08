<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/8
 * Time: 12:01
 */


$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, "www.baidu.com", 80);



$in = "GET / HTTP/1.1" . PHP_EOL . PHP_EOL;

socket_write($socket, $in, strlen($in));
$read = new EvIo($socket, Ev::READ, function ($read, $data){
    echo "get";
});

Ev::run();

