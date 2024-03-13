


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<title>Students Managerment</title>
<style>

</style>

</html>


<?php
//SESSION:Authencation -Authorization
//Authentication :my la ai
//Authorization : may co quyen gi
//student:chinh sua thong tin cua minh, xem diem cua minh
//lecture: xem thong tin sv, diem cua 1 lop gvcn
    session_start();

//Dich vu bao ve
    if ($_SESSION["islogin"]){
        header("location:login.php");
    }
?>

