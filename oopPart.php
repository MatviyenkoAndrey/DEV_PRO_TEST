<?php

//3.1 Collection
class Collection {
    private $storage;


    public function __construct(array $storage = NULL)
    {
       $this->storage = $storage;
    }

    public function add ( stdClass $key, mixed $data = NULL){
        $this->storage[] = $key($data);
    }
    public function remove (stdClass $key){
        $this->storage = array_filter($this->storage, function ($element) use ($key) { 
            return ($element != $key); 
        } );
    }
    public function getHash (stdClass $object){
        return spl_object_hash($object);
    }
    public function current (){
        return $this->storage[array_key_last($storage)];
    }
    public function getObjectList (){
        return $this->storage;
    }
    public function check ( stdClass $object){
        return array_key_exists($object, $storage);
    }
    public static function removeAll (ObjectCollection $collection){
        foreach($collection as $value){
            unset($value);
        }
    }
}

//3.2 Zoo
abstract class Animal{
    public $name;
    public function Describe(){
        return $this->name;    
    }
    abstract public function Greet();
}
class Dog extends Animal{
    public function Greet(){
        return "Woof!";    
    }
}
class Wolf extends Dog{
    public function hunt(){

    }
}
class Cat extends Animal{
    public $furColor;
    public $weight;

    public function Greet(){
        return "Myaff";    
    }

    public function purr(){
        return "Murrrr";
    }

}

class Lion extends Cat{
    public $maneColor;

    public function roar(){
        return "Rrrrrr";
    }
}
class Cougar extends Cat{
    public function __construct(){
        $this->weight = 25;
    }
}

interface Fish {
    public function swim();
}

class Trout implements Fish {
    public function swim() {
      echo "I can swim";
    }
}
class Shark implements Fish {
    public function swim() {
      echo "I can swim";
    }
}