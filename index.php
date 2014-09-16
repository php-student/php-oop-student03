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

/**
 * @property string $name
 * @property integer $ege
 */

class Person{
    
    protected $_name="Ivan";
    protected $_ege=30;
    
    public function __get($property){
        
        $methodname='get'.ucfirst($property);
        if(method_exists($this, $methodname)){
            
            return $this->$methodname();
     
        } else{
            
            throw new Exception('not exists');
        }
        
    }
    
    public function __isset($property) {
         $methodname='get'.ucfirst($property);
        if(method_exists($this, $methodname)){
            
            return true;
     
        } else{
            
           return false;
        }
        
    }
    
    public function getName(){
        
        return $this->_name;
    }


 public function __set($property,$value){
        
        $methodname='set'.ucfirst($property);
        if(method_exists($this, $methodname)){
            
            return $this->$methodname();
     
        } else{
            
            throw new Exception('not exists');
        }
        
 }
    
    public function getAge(){
        
        return $this->_ege;
    }
    
      public function setAge($age){
        
        return $this->_age=$age;
    }
}


$person=new Person();

//echo $person->name;

echo '<br>';

//echo $person->ege;


$person->Age=12;


var_dump(isset($person->name));

var_dump(isset($person->ege));