<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2 0002
 * Time: 下午 21:04
 */
class sqlCon
{
    public $con;

    public function __construct()
    {
        $this->con=mysqli_connect("localhost","root","root","weibo");
        if(!$this->con){
            throw new Exception("数据库连接失败".mysqli_error($this->con));
        }
    }

    public function strCon($sqlStr){
        $newStr = mysqli_query($this->con,$sqlStr);
        if($newStr){
            return $newStr;
        }else{
            throw new Exception("数据库连接失败".mysqli_error($this->con));
        }

        $this.closeSql();
    }

    public function closeSql(){
        if($this->con){
            mysqli_close($this->con);
        }
    }

}