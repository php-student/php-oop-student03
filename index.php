<?php

class Greeting{
    
    const number=90;
    public static $name='Иван';
    
    static public function sayHollow(){
        
        echo "Hollow {self::$name}";
    }
}

Greeting::sayHollow();

$error=new Exception("massage");


class Reader{
    protected $_file;
    public function __construct($file) {
       if(file_exists($file)){
           $this->_file=$file;
       } else {
         throw new Exception('File not exists');     
       }
    }
    public function read(){
        
        
    }
}

