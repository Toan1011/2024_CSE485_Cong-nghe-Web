<?php
$navItem = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Menu</title>


</head>
<body>
<nav>
    <ul>
        <li style="text-align: right;"><i class="fas fa-home"></i></li>
        <?php foreach ($navItem as $item) : ?>
            <li style="text-align: right;"><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>
</nav>
</body>
</html>