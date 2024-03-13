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

    <title>Menu</title>

    <style>
        nav {
            background-color: #1b1081;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            color: white;
            text-align: right;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            color: white;
            text-align: right;

        }

        nav ul li {
            margin-right: 15px; /* Khoảng cách giữa các mục */
            padding: 8px 20px; /* Tăng padding để tạo ra thanh border ngắn lại */
            background-image: linear-gradient(90deg, transparent 99%, #ffffff 10%); /* Tạo hiệu ứng border ngắn theo chiều dài */
            display: flex;
            align-items: center;
        }

        nav ul li:last-child {
            background-image: none; /* Loại bỏ hiệu ứng border cho mục cuối cùng */
        }


        nav ul li i.fas.fa-home {
            font-size: 24px;
        }




    </style>
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


