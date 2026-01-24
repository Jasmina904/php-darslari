<?php
$name = "<h2> sarvar </h2>";
echo $name. "<br>";
$newname =filter_var($name,FILTER_SANITIZE_STRING);
echo $newName. "<br>"


$email =" test@example.com ";
if(filter_var($email, filter: FILTER_VALIDATE_email)){
    echo "Email to'g'ri";
} else {
    echo "Email"
}


?>