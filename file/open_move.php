<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/10/30
 * Time: 19:09
 */

$file = "/tmp/open_move.test";
$fp = fopen($file, 'w');

$target = '/tmp/open_move.test.bak';
$rename = rename($file, $target);
if($rename === false){
    echo "rename failed" . PHP_EOL;
}

$write = fwrite($fp, "test");
if(!$write){
    echo "write file failed" . PHP_EOL;
}

$content = file_get_contents($target);

if($content != "test"){
    echo "content is not same" . PHP_EOL;
}

