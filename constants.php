<?php
class Car{
    public const BRAND="bmw"; ///class constant
    public function info(){
        return self::BRAND;
    
    }
}
$BMW =new car();
echo $bmw->info(). "<br>";
echo Car::BRAND;



?>