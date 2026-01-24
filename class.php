<?php

class car{
    //properties - Xususiyatlar
    public $model;
    public $color;
 
//Method -Funksiya
public function haydash(){
    echo "Mashina harakatlanyapti!<br>";
}
}

$matiz =new Car();
$matiz->model = "Matiz";
$matiz->color = "Oq";
echo $matiz->model."br";
$matiz->haydash()."br";

class Mahsulotlar{
    public $nomi;
    public $kirim_narxi;
    public $sotuv_narxi;
    public $birligi;

    public function mahsulotQoshish($nomi, $kirim_narxi){
        $this->nomi =$nomi;
        $this->$kirim_narxi =$kirim_narxi;
    }
}

$snikers =new mahsulotlar();
$snikers->name("snikers");

?>