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
    $result = null;
    $stack = new SplStack();
    $stack->push($data);
    do{
        if(!$stack->valid()) break;

        $result = $stack->pop();
        if($result > 10){
            return $result;
        }

        $stack->push($result + 1);
    }while(true);

    return $result;
}


echo "recursion:";
echo recursion(1);
echo PHP_EOL;
echo "noRecursion:";
echo noRecursion(1);
echo PHP_EOL;
