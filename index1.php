<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/25 0025
 * Time: 下午 22:41
 */

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

require "sqlWang.php";
$newSql = new sqlWang();
$add ="INSERT INTO users (username, userpwd,usertel) VALUES ('ab2c', '456','18678029287') ";
$dataSelect = "select * from users WHERE username = 'ab2c'";


$newCont2 =mysqli_fetch_array($newSql->strCon($dataSelect));

if (isset($newCont2['username']) && $newCont2['username'] != ""){
    throw new Exception("用户已存在");
}else{
   $addSql = $newSql->strCon($add);
   if (!$addSql){
       throw new Exception("insert error");
   }
}
$newStr2 = "select * from users";
$result = $newSql->strCon($newStr2);
while($row=mysqli_fetch_array($result)){
    echo $row['username'] . " " . $row['userpwd']." ".$row['usertel'];
    echo "<br />";
}




