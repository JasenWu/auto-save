<?php
    require('./db.php');
    
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
        $name = "'John____{$i}'";
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES (" . $name . ", 'Doe', 'john@example.com')";
        $sql_select = "select * FROM `MyGuests` where firstname = " . $name;
        echo $sql_select;
        $isExsit = $conn->query($sql_select)->num_rows;
        echo $isExsit;
        if($isExsit){
                echo('recorded');
                
                return false;
        }
        if ($conn->query($sql) === TRUE) {
            echo "新记录插入成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    function autoInsert($conn){
        $i = 1;
        while(1){
            $i++;
            sleep(3);
            insertData($conn,$i);
            echo date("H:i:s") . PHP_EOL;
        }
        
    }

    //insertData($conn);
    autoInsert($conn);

    // $conn->close();



?>