<?php
abstract class Animal{
    abstract public function test();
}

abstract class Animals extends A{
    public $group;
    public function __construct($group) {
        $this->group =$group;
    }
    abstract public function  sound();
    public function test() {
        echo "the animal eating!<br>"; 
    }  
}
class dog extends Animals{
    public function sound() {
        echo "Dog says woof woof !<br>";

    }
}
$dog=new dog("Wild animals !<br>");
echo $dog->sound();
$dog->test();
echo $dog->group;
?>