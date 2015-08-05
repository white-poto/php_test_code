<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/5
 * Time: 14:34
 */

$timer = new EvPeriodic(0., 0.001, null, function($w, $revents){
    echo microtime(), PHP_EOL;
});

Ev::run();