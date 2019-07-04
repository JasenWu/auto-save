<?php
    require('./db.php');

    define('INTERVAL',3);//定时间隔时间
    $ch = curl_init();
 
   

    function getResource($src = "http://www.runoob.com/"){
        // 创建一个新cURL资源
        global $ch;
        
        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, $src);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // 抓取URL并把它传递给浏览器
         curl_exec($ch);
         return curl_multi_getcontent($ch);

        // 关闭cURL资源，并且释放系统资源
        //curl_close($ch);
    }

    function createDB(){
        // 创建数据库
        $sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) === TRUE) {
            echo "数据库创建成功";
        } else {
            echo "Error creating database: " . $conn->error;
        }
    }

    function createTable($conn)
    {
         // 使用 sql 创建数据表
        $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "创建数据表错误: " . $conn->error;
        }
    }


    //createTable($conn);
    function insertData($conn,$i){
        $res =   getResource('http://localhost/blogdemo2/backend/web/index.php?r=user%2Ftest');
        $res = json_decode($res);

        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES  ('{$res->firstname }' , '{$res->lastname}', '{$res->email}')";
    
        $sql_select = "select * FROM `MyGuests` where firstname = '{$res->firstname}'";
      
        $isExsit = $conn->query($sql_select)->num_rows;
        
        // if($isExsit){
        //         echo('  recorded');
        //         return false;
        // }
        if ($conn->query($sql) === TRUE) {
            echo "新记录插入成功" . PHP_EOL;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function autoInsert($conn){ 
        $i = 1;
        while(1){
            $i++;
            sleep(INTERVAL);
            insertData($conn,$i);
            //echo date("H:i:s") . PHP_EOL;
        }
        
    }
 
    autoInsert($conn);

    // $conn->close();



?>