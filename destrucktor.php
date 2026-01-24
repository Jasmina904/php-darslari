<?php
class mevalar{
    public $nomi;
    public $rangi;
    public function __construct($nomi, $rangi){
        $this->nomi = $nomi;
        $this->rangi = $rangi;
    }
     public function __destruct(){
        echo"Destruct ishga ishga tushdi";
    }

}
$olma=new mevalar('olma', "qizil");
echo $olma->nomi."<br>";


?>
