<?php
/**
 * Created by PhpStorm.
 * User: 无双大吊
 * Date: 2017/12/15
 * Time: 15:56
 */

/**
 * description : php正则表达式函数
 * @param $var
 */
function show($var) {
    if (empty($var)) {
        echo 'null';
    } elseif (is_array($var) || is_object($var)) {
        echo '<pre>';
        print_r($var);
        echo '<pre>';
    } else {
        echo $var;
    }
}