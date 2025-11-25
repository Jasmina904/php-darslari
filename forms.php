<!DOCTYPE HTML>
<html>  
<body>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
</body>
</html>