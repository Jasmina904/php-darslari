<?php
class User{
public $name;
public $age;
 public function info(){
  return "bu User classi!<br>". self::welcome();
 }
public static function welcome (){
    return "Hello World!<br>";

}
public static function add(){
    self::$soni++;
}
}

$user = new User();
echo $user->info();
echo $user->welcome();
echo $user::welcome();

echo $user::welcome();
user::add();
user::add();
echo user::$soni;











