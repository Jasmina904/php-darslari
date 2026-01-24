<?php
class Animal 
{
    public function eat ()
    {
        echo "hayvon ovqat yemoqda";
    }
}
class Cat Extends Animal{
    public function meow() {
        echo " Miyov <br>";
    }
}
$cat =new Cat();
$cat->eat();
$cat->meow();
?>