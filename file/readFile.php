<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2 0002
 * Time: 下午 21:44
 */

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

$file_path = "test.txt";
if(file_exists($file_path)){
    $file_open = fopen($file_path,"r");
    $file_read = fread($file_open,filesize($file_path));
    preg_match("{窗前明月光，(.*?)低头思故乡。}s",$file_read,$str);
    echo str_replace("\n","<br>",$str[1]);
}else{
    throw new Exception("文件不存在");
}