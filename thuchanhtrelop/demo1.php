<?php
$bien = "Mot chuoi gi do";
$colors = ['c1'=>'red', 'c2'=>'blue']; //mang key value
$others = [1,2,3,'anything'];

echo "The content of: $bien";
echo "<h1 style='color:".$colors['c1']."'>$bien</h1>";
echo "<h1 style='color:{$colors['c1']}'>$bien</h1>";

var_dump($others);
echo '<pre>';
print_r($others).'<br>';

foreach ($colors as $key => $value){
    echo $key .'<br>';
}
foreach ($others as $key => $value){
    echo $key .'<br>';
}
?>

    <!-- Session: Authentication - Authortication
    Authentication: ban la ai (Username-Password)
    Authortication: ban co quyen gi -->
<?php
session_start();  //DV bao ve, neu trong code co html thi phai dat cai nay len truoc html
if(!$_SESSION['isLogin']){
    header("location: welcome.php");
}
?>