<?php
interface CarInterface{
    public function haydash();
    public function tormizlash();

}
interface Car2{
public function info();
}

class Car implements CarInterface, Car2{
    public $model;
    public $color;
    public function haydash(){
        return "Mashina harakatlanyapti!<br>";
    }
    public function tormizlash(){
        return "mashina tormizlandi!<br>";
    }
    public function info(){
        return "bu car class!<br>";
    }
}
    $onix = new Car();
echo $onix->haydash();
echo $onix->tormizlash();
echo $onix->info();








?>