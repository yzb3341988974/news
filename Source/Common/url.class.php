<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/15 0015
 * Time: 下午 4:37
 */
namespace Common;
class url {
    static private $controller;
    static private $method;
    static private function init(){
        self::parseUrl();
    }
    static public function parseUrl(){
        if (!isset($_GET[\INDEX_CONTROLLER])||$_GET[\INDEX_CONTROLLER]==''){
            $_GET[\INDEX_CONTROLLER]='index';
        }
        if (!isset($_GET[\INDEX_METHOD])||$_GET[\INDEX_METHOD]==''){
            $_GET[\INDEX_METHOD]='index';
        }
        self::$controller=ucfirst( $_GET[\INDEX_CONTROLLER]);
        self::$method=ucfirst( $_GET[\INDEX_METHOD]);
        //var_dump($_GET[\INDEX_METHOD]);
        var_dump(self::$controller);
        var_dump(self::$method);
    }
    static function getC($complete=false){
        if (!isset(self::$controller)){
            self::init();
        }
        if ($complete){
            return self::$controller.'Controller';
        }else{
            return self::$controller;
        }
    }
    static function getMethod(){
        if (!isset(self::$method)){
            self::init();
        }
        return self::$method;
    }
}