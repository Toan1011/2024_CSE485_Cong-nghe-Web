<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){  //ktra xem nguoi dung da nhan nut Submit chua
    $user = $_POST['user'];  //lay DL tu form
    $pw = $_POST['pw'];

    if($user="abc" && $pw="123"){
        session_start();
        $_SESSION['isLogin'] = $user;
        header("location:demo1.php");
    }
    else{
        header("location:welcome.php?error=gigido");
    }
}
?>