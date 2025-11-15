<?php
//Birinchi usul
$sonlar =array(2,5,23,83,565,2,5,"Test,'Qiymat");
//Ikkinchi usul
$sonlar1 = [5,3,56,4,3,6,45,'test',true];

echo $sonlar[4];
echo "\n";
 $sonlar[4] =70;
 echo "\n";
echo $sonlar[4];
echo "\n";
print_r($sonlar);
//massivga yangi element qo'shish oxiriga 
array_push($sonlar, 113,45);
print_r($sonlar);
echo "\n";
$car = ["model" => "Cobalt", "brand" => "Chevrolet", "year" => 2025];
// print_r($car)
echo $car["model"];
echo "\n";



?>