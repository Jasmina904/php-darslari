<?php
class Calculator{
public static function qoshish($a,$b){
     return $a+$b;
    
}
public static function olish($a,$b){
     return $a-$b;
}
public static function text($a){
     return strtoupper();
}
}
echo  Calculator::qoshish(10,10)."<br>";
echo  Calculator::olish(10,5);
echo  Calculator::text("salom!<br>");



?>