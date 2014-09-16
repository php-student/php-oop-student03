<?php

/*class Greeting{
    
    const number=90;
    public static $name='Иван';
    
    static public function sayHollow(){
        
        echo "Hollow".self::$name;
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
}*/

class Person{
    
    protected $_name="Ivan";
    protected $_ege=30;
    
    public function __get($property){
        
        $methodname='get'.ucfirst($property);
        if(method_exists($this, $methodname)){
            
            return $this->$methodname();
     
        } else{
            
            throw Exception('not exists');
        }
        
    }
    
    public function getName(){
        
        return $this->_name;
    }
}


$person=new Person();

echo $person->name;

echo '<br>';

echo $person->ege;