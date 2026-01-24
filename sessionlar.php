<?php
session_start();
// session unset(); //Barcha sessionlarni o'chiradi
//session destroy(); //Barcha sessionlarni va sessionni faylini ham o'chiradi
unset($_SESSION['ISM']);
echo "Ma'lumot o'chiriladi"
?>