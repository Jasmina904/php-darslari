<?php
class animal{
    public $name;
    public $zoti;
    public $ogirligi;
    public function eat(){ 
                return "hayvon ovqat yemoqda!<br>";
    
    }

}
class Dog extends Animal{
    public function bark(){
        return "wow wow <br>";
    }
}
$dog =new Dog();
echo $dog-eat();
echo $dog-bark();


    

?>