<?php
include"Admin/User.php";
include "Mijoz/User.php";

$admin =new Admin\User\User();
echo $admin->info();

$User = new Mijoz\User\User();
echo $user->info();







?>