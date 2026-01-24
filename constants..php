<?php
class Car{
    public $model;

    public const BRAND="bmw"; 
    public function info(){
        return "Bu ". self::BRAND. " mashina classi!<br>";
    
    
    }
}
echo Car::BRAND."<br>";
$BMW =new car();
echo $bmw->info(). "<br>";
echo Car::BRAND;



?>