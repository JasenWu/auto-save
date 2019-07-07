<?php


//开发机

$servername = "192.168.74.1";
$username = "general";
$password = "innotechx";

//本地
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
$dbname = "jasonTest";
 
// 创建连接
 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}else{
  //echo "connected";
} 
 

//$conn->close();

