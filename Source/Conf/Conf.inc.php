<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/15 0015
 * Time: 下午 4:15
 */
if (!defined('SITE')){
    exit('Access Denied');
}
define('PATH_APP',dirname(dirname(dirname(__FILE__))));
//项目核心程序所在的绝对路径
define('PATH_SOURCE',PATH_APP.'/'.'Source');
//当前运行的模块的路径
define('PATH_MODULE',PATH_SOURCE.'/'.MODULE);

define('INDEX_CONTROLLER','c');
define('INDEX_METHOD','m');

