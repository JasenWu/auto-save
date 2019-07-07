<?php
$host = 'http://apitest.wintalent.cn:8080';

//参数1：访问的URL，参数2：post数据(不填则为GET)，参数3：提交的$cookies,参数4：是否返回$cookies
  function curl_request($url,$post='',$cookie='', $returnCookie=0){
      
           $curl = curl_init();
           curl_setopt($curl, CURLOPT_URL, $url);
           curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)');
           curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
           curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
           curl_setopt($curl, CURLOPT_REFERER, "http://XXX");
           if($post) {
              curl_setopt($curl, CURLOPT_POST, 1);
              curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
          }
          if($cookie) {
              curl_setopt($curl, CURLOPT_COOKIE, $cookie);
          }
          curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
          curl_setopt($curl, CURLOPT_TIMEOUT, 10);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          var_dump('$url',$url);
          die;
          $data = curl_exec($curl);
          
      
          if (curl_errno($curl)) {
              return curl_error($curl);
          }
          curl_close($curl);
          if($returnCookie){
              list($header, $body) = explode("\r\n\r\n", $data, 2);
              preg_match_all("/Set\-Cookie:([^;]*);/", $header, $matches);
              $info['cookie']  = substr($matches[1][0], 1);
              $info['content'] = $body;
              return $info;
          }else{
              return $data;
          }
 }



$path = '/wt/api/2.0/getToken';

$params = array(
  'corpCode'=>'jifen',
  'userName'=>'jifen',
  'password'=>'r9OYmZlcvgTbEz8h'
);

 
$res = curl_request($host . $path ,$params);


?>