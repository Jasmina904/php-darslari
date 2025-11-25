<?php
if($_server['REQUEST_METHOD'] == "POST"){
    $ism =$_POST['ism'];
    setcookie(name: 'ism', value: $ism, options: time()=60);
echo "Cookie saqlandi";
`
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    


if(isset($_COOKIE['ism'])){
    echo "<h2> Salom, ".$_COOKIE['ism']." </h2>";
} else {
    echo '<form action="" method="post">
    <label for="">Ismingizni kiriting</label><br>
    <input type="text" name="ism" id=">
    <input type="submit" value ="Yuborish" id="">
    </form>';
}
?>
</body>
</html>