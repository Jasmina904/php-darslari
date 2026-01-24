<?php
session_start();
if($_SERVER['REQUEST_METHOD'] -- "POST
"){
if($_POST['login'] = 'admin' && $POST ['parol'] == '12345'){
echo 'login qilinadi <a href='home.php' target'_blank' home sahifasiga o'tish</a>
}else{
    echo "login yoki parol xato"
}
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="">login</label><br>
    <input type="text" name="login" id=""> <br>
    
    </form>
</body>
</html>
?>