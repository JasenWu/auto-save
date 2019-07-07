<?php

  function curl_request($url, $data, $header=array(),$timeout=0){
   
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch,CURLOPT_COOKIEJAR,null);
    if ($header) {
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }
    if ($timeout && is_numeric($timeout) && $timeout > 0) {
      curl_setopt($ch, CURLOPT_NOSIGNAL, true);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, $timeout);
      curl_setopt($ch, CURLOPT_TIMEOUT_MS, $timeout);
    }
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_URL,$url);
    if($data){
      curl_setopt($ch,CURLOPT_POST,true);
      curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    }
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
 }
 


function getTocken($host,$params){
  $path = '/wt/api/2.0/getToken';
  $dataString = json_encode($params);
  $headers          = array();
  $headers['Content-Type']  = 'application/json';
  $headerArr = array();
  foreach($headers as $n => $v ){
    print_r('$n',$n);
    $headerArr[] = $n .':' . $v;
  }

 return json_decode(curl_request($host . $path ,$dataString,$headerArr));
}

  function getResume($host,$params,$token){
    $path = '/wt/api/2.0/auth/resume/getTalentResume';
    $dataString = json_encode($params);
    $headers          = array();
    $headers['Content-Type']  = 'application/json';
    $headers['Authorization']  = 'Bearer ' . $token;
    $headerArr = array();
    foreach($headers as $n => $v ){
      
      $headerArr[] = $n .':' . $v;
    }
  
   return curl_request($host . $path ,$dataString,$headerArr);
  }




function initResumes(){

  $host = 'http://apitest.wintalent.cn:8080';
  
  $params = [
    'corpCode'=>'jifen',
    'userName'=>'jifen',
    'password'=>'r9OYmZlcvgTbEz8h'
  ];

  $tocken = getTocken($host,$params);

  $resumes = getResume($host,[
    "rowSize"=>10,
    "cType"=>1,3,4,
    "vType"=>1
  ],$tocken->data->token);

   return $resumes =json_decode($resumes)->data->resume;
  }
 
