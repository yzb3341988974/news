<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/15 0015
 * Time: 下午 4:43
 */
if (!defined('SITE')){
    exit('Access Denied');
}

function load($className){
    //var_dump($className);
    $path=PATH_SOURCE.'/'.str_replace('//','/',$className).'.class.php';
    //var_dump($path);
    if (file_exists($path)){
        require $path;
    }
}