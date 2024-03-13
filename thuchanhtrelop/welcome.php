<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header("location:admin.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_GET['error'])){
    echo "<p style='color:red''>{$_GET['error']}</p>";
}
?>
<form action="Example.php" method="post" enctype="multipart/form-data">
    Username:<input type="text" name="user" id=""></br>
    Password: <input type="text" name="pw" id=""></br>
    File: <input type="file" name="myfile" id=""></br>
    <button type="submit">Login</button>
</form>
</body>
</html>