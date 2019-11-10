#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: frank.liu
 * Date: 2019/11/10
 * Time: 12:09 PM
 * Version:v1.0
 * Email: liuboserehi@gmail.com
 * Description:
 * 代码千万行，注释第一行。
 * 编码不规范，接盘两行泪。
 */

$opts = array('http' =>
    array(
//        'proxy' =>'tcp://127.0.0.1:8888',
        'method'  => 'POST',
        'header'  => "Content-Type: text/html\r\n",
    )
);

$context  = stream_context_create($opts);
$url = 'http://www.qq.com';
$result = file_get_contents($url, false,$context);
