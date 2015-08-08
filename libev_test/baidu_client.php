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
$out = socket_read($socket, 1024);

echo $out;