<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            max-width: 353px;
            max-height: 200px;
        }

        .main {
            display: flex;
        }

        .product {
            margin-right: 50px;
        }
    </style>
</head>
<body>

<?php
    // Dữ liệu sản phẩm
    $products = [
        [
            "image" => 'https://guruofficialbrand.com/wp-content/uploads/2022/05/C52A75811-scaled.jpg',
            "id" => 1,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "image" => 'https://routine.vn/media/amasty/webp/catalog/product/cache/5de180fdba0e830d350bd2803a0413e8/1/0/10f20dpa102cr1_13__1_1_jpg.webp',
            "id" => 2,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "image" => 'https://product.hstatic.net/1000397717/product/anh_man_hinh_2022-11-24_luc_08.47.13_030e9a66ed164a43ac62f10ff78e05df_master.png',
            "id" => 3,
            "name" => "Bag",
            "price" => 20,
            "description" => "A comfortable and stylish Bag."
        ],

        [
            "image" => 'https://product.hstatic.net/1000213518/product/t21-gr__2__1001fa18cca9460c9c5517ff6fdbd718_master.jpg',
            "name" => "Chair",
            "price" => 30,
            "description" => "A comfortable and stylish Chair."
        ],

        [
            "image" => 'https://product.hstatic.net/200000644689/product/5_c74bd5f3472f46a3a11a78794d0feb5a_master.jpg',
            "name" => "Table",
            "price" => 25,
            "description" => "A comfortable and stylish Table."
        ],

        [
            "image" => 'https://pos.nvncdn.com/8d4112-8686/ps/20221212_UzpXDkzlYD6waoud5cvHla7p.jpg',
            "name" => "Dress",
            "price" => 15,
            "description" => "A comfortable and stylish Dress."
        ]
    ];

    // Số lượng sản phẩm trên mỗi trang
    $productsPerPage = 2;

    // Số trang dựa trên số lượng sản phẩm và số lượng sản phẩm trên mỗi trang
    $totalPages = ceil(count($products) / $productsPerPage);

    // Xác định trang hiện tại
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    // Tính chỉ số bắt đầu và kết thúc của sản phẩm trên trang hiện tại
    $startIndex = ($currentPage - 1) * $productsPerPage;
    $endIndex = $startIndex + $productsPerPage - 1;
    if ($endIndex >= count($products)) {
        $endIndex = count($products) - 1;
    }

    // Hiển thị sản phẩm trên trang hiện tại
    echo '<div class="main">';
    for ($i = $startIndex; $i <= $endIndex; $i++) {
        $product = $products[$i];
        echo '<div class="product">';
        echo '<img src="'.$product['image'].'"/>';
        echo '<p>ID: '.(isset($product['id']) ? $product['id']:''). '</p>';
        echo '<p>Name: '.(isset($product['name']) ? $product['name']:''). '</p>';
        echo '<p>Price: '.(isset($product['price']) ? $product['price']:''). '</p>';
        echo '<p>Description: '.(isset($product['description']) ? $product['description']:''). '</p>';
        echo '</div>';
    }
    echo '</div>';

    // Hiển thị liên kết phân trang
    echo '<div class="pagination">';
    for ($page = 1; $page <= $totalPages; $page++) {
        echo '<a href="?page='.$page.'">'.$page.'</a>';
    }
    echo '</div>';
?>
</body>
</html>
