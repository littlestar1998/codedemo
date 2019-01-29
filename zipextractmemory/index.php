<?php
/**
 * Created by PhpStorm.
 * User: xiaoxingxing
 * Date: 2019-01-28
 * Time: 18:36
 */
$zip = new ZipArchive();
$zip->open('demo.zip');

//遍历文件
for ($i=0;$i < $zip->numFiles;$i++) {

    $fileString = $zip->getFromIndex($i);//读取文件
    $fileName = $zip->getNameIndex($i);//获取当前index文件名
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime_type = finfo_buffer($finfo,$fileString);//从String中获取MIME信息
    echo sprintf("file name :%s mime type:%s",$fileName,$mime_type).PHP_EOL;

    file_put_contents($fileName,$fileString);//文件存盘
}