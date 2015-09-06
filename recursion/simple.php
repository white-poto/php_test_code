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
    $stack = new SplStack();
    $stack->push($data);
    do{
        if(!$stack->valid()) break;

        $cur_data = $stack->pop();
        if($cur_data > 10){
            return $cur_data;
        }

        $stack->push($cur_data + 1);
    }while(true);
}


echo "recursion:";
echo recursion(1);
echo PHP_EOL;
echo "noRecursion:";
echo noRecursion(1);
echo PHP_EOL;
