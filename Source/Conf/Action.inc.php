<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/15 0015
 * Time: 下午 4:33
 */
if (!defined('SITE')){
    exit('Access Denied');
}
include 'Conf.inc.php';
include "Function.inc.php";
spl_autoload_register('load');
Common\url::parseUrl();