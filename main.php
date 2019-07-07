<?php
define('INTERVAL',10);//定时间隔时间
require('./db.php');
require_once('./source.php');


class sysData {
    var  
    $ch;//curl_init
     

    public function __construct(){
      $this->ch = curl_init();
    }

    protected function getResource(){
      return initResumes();
    }

    protected function insert($conn,$res){
      $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES  ('{$res->resumeContent->personalInformation->email }' , '{$res->resumeContent->personalInformation->email}', '{$res->resumeContent->personalInformation->email}')";

      $sql_select = "select * FROM `MyGuests` where firstname = '{$res->firstname}'";
      $sql_count  = "select *  FROM `MyGuests`";

      $count = $conn->query($sql_count)->num_rows;

      $isExsit = $conn->query($sql_select)->num_rows; 
      // if($isExsit){
      //         echo('  recorded');
      //         return false;
      // }

      
      if ($reslt = $conn->query($sql) === TRUE) {
          echo($count);
          echo ":新记录插入成功" . PHP_EOL;
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    
    protected function insertData($conn,$i){
     
      $res =   $this->getResource($this->src);
     // $res = json_decode($res);

      

      foreach($res as $v){
        $this->insert($conn,$v);
        //echo($v->resumeId  .  PHP_EOL);
      } 
    }
   

    public function autoInsert(){ 
      global $conn;
      $i = 1;
      while(1){
          $i++;
          sleep(INTERVAL);
          $this->insertData($conn,$i);
          //echo date("H:i:s") . PHP_EOL;
      }
      
    }


    // protected function createDB(){
    //   // 创建数据库
    //   $sql = "CREATE DATABASE myDB";
    //   if ($conn->query($sql) === TRUE) {
    //       echo "数据库创建成功";
    //   } else {
    //       echo "Error creating database: " . $conn->error;
    //   }
    // }

    // protected function createTable($conn)
    // {
    //   // 使用 sql 创建数据表
    //   $sql = "CREATE TABLE MyGuests (
    //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    //   firstname VARCHAR(30) NOT NULL,
    //   lastname VARCHAR(30) NOT NULL,
    //   email VARCHAR(50),
    //   reg_date TIMESTAMP
    //   )";
    //   if ($conn->query($sql) === TRUE) {
    //       echo "Table MyGuests created successfully";
    //   } else {
    //       echo "创建数据表错误: " . $conn->error;
    //   }
    // }

    function __destruct() {
      global $conn;  
      $conn->close();
      curl_close($this->ch);
      print "销毁 " ;
    }

}
