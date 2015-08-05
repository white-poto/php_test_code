<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/5
 * Time: 14:34
 */

$timer = new EvPeriodic(0., 0., null, function($w, $revents){
    echo time(), PHP_EOL;
});

Ev::run();