<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2 0002
 * Time: 下午 21:04
 */

require "sqlCon.php";
$newStr = new sqlCon();
$useName = $_POST["useName"];
$usePwd = $_POST["uesPwd"];
$useTel = $_POST["useTel"];

$addStr = "INSERT INTO userInfo (userName, userPwd,userTel)
VALUES ($useName,$usePwd,$useTel)";
$newStr->strCon($addStr);