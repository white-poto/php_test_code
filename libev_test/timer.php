<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/4
 * Time: 14:22
 */

$w1 = new EvTimer(10, 3, function ($w) {
    echo "Custom data: $w->data\n";
    echo "2 seconds elapsed\n";
}, 'abcd');
Ev::run();
