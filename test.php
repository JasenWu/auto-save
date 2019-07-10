<?php


class __Parent{
  function __construct($name){
    $this->name = $name;
  }
  
  function ring(){
    print('ring');
  }
  function call(){
    print('call');
  }


}


class __Child extends __Parent{
  function __construct($name)
  { 
    
  }

  function print(){
    print('sss');
    parent::ring();
    
  }
}

$s = new __Child('jason');


var_dump($s->print());