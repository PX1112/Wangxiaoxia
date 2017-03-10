<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/25 0025
 * Time: 下午 22:26
 */
class sqlWang
{
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost","root","root","weibo");
        if(!$this->conn){
            throw new Exception("数据库连接错误".mysqli_error($this->conn));
        }


    }
    public function strCon($sqlStr){
        $newCon = mysqli_query($this->conn,$sqlStr);
        if($newCon){
            return $newCon;
        }else{
            echo "数据库连接错误".mysqli_error($this->conn);
        }

        $this->closeSql();

    }

    public function closeSql(){
        if($this->conn){
            mysqli_close($this->conn);
        }
    }

}
