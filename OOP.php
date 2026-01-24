<?php
//class Yaratish
class Car { 
    public $color;
    public $model;
    public $probeg;

    public function __construct($model,$color) {
        $this->model =$model;
        $this->color =$color;
    }

    public function setprobeg($probeg){
        $this->probeg =$probeg;
    }

    public function drive(){
        echo"Mashina harakatlanyapti !";
    }
}
//***
$bmw =new Car("BMW X5","White");
echo $bmw->model."<br>";
echo $bmw->color."<br>";



//Class dan object yaratish .
//$bmw =new car();
//$bmw->model="BMW X5";
//$bmw->color="black";
//var_dump($bmw);
//echo $bmw->model;
//var_dump($bmw);
//echo $bmw->model."<br>";
//echo $bmw->drive()."<br>";
//$bmw->setProbeg(10000);
//echo $bmw->probeg."<br>";

?>