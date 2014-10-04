<?php
/**
 * Created by PhpStorm.
 * User: huyanping
 * Date: 14-9-18
 * Time: 下午5:46
 */

/*
* Hello World server
* Binds REP socket to tcp://*:5555
* Expects "Hello" from client, replies with "World"
* @author Ian Barber &lt;ian(dot)barber(at)gmail(dot)com>
*/
$context = new ZMQContext(1);
// Socket to talk to clients
$responder = new ZMQSocket($context, ZMQ::SOCKET_REP);
    $responder->bind("tcp://*:5555");
while(true) {
// Wait for next request from client
    $request = $responder->recv();
printf ("Received request: [%s]\n", $request);
 
// Do some 'work'
sleep (1);
 
// Send reply back to client
$responder->send("World");
}

