<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/9/6
 * Time: 15:15
 *
 * 验证所有递归都可以用循环代替
 */



function recursion($data){
    if($data > 10){
        return $data;
    }

    return recursion($data + 1);
}


function noRecursion($data){
    $stack = array($data);
    do{
        if(empty($stack)) break;

        $cur_data = array_pop($data);
        if($cur_data > 10){
            return $cur_data;
        }

        array_push($stack, $cur_data + 1);
    }while(true);
}


echo "recursion:";
echo recursion(1);
echo PHP_EOL;
echo "noRecursion:";
echo noRecursion(1);
echo PHP_EOL;
