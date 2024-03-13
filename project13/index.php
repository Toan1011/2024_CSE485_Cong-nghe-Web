<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<title>menu</title>
<style>
    .courses{

        padding: 0;
        margin: 0;


    }
    .content1, .content2{
        display: flex;
        justify-content: space-between;
    }

    .course{

        flex: 1;
        max-width:353px;
        margin-top: 30px;
    }
    .main{
        margin: 200px;
    }
    img{
        max-width: 353px;
        max-height: 200px;
    }
    .hocphi::before{
        font-family: "FontAwesome";
        content: "\f06b";
        margin-right: 20px;
        color:red ;

    }
    .khaigiang::before{
        font-family: "FontAwesome";
        content: "\f017";
        color: #1900ff;
        margin-right: 20px;
        color:red ;

    }
    .thoiluong::before{
        font-family: "FontAwesome";
        content: "\f02e";
        margin-right: 20px;
        color:red ;

    }
    .title{
        border-left:5px solid #ff0000 ;
        padding-left: 10px;
        color: red;

    }
</style>

</html>

<?php
// Dữ liệu khóa học lưu động trong mảng

$courses1 = [
    // Lập Trình Quốc Tế
    [
        'image' => 'https://topdev.vn/blog/wp-content/uploads/2023/05/mat-bao-lau-de-tro-thanh-lap-trinh-vien-quoc-te.png',
        'main content' => 'KHÓA HỌC SẮP KHAI GIẢNG ',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ ',
        'description' => 'Chương trình đào tạo chính  thức tại Việt Nam từ Aptech Global. 
        Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',

        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
        // Web Full


    [
        'image' => 'https://thetapacademy.com/wp-content/uploads/2022/10/full-stack-web-developer.jpg',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người 
        chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học',

        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => 'Thời lượng: 6 tháng'
    ],

        //Java full

    [
        'image' => 'https://www.devopsschool.com/blog/wp-content/uploads/2022/03/java_logo_icon_168609.png',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, 
        các ứng dụng doanh nghiệp sử dụng J2EE, Servlet,JSP, Spring Framework, EJB,...',

        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => 'Thời lượng: 236 giờ'
    ],
 ];
    $courses2 = [

        // PHP

    [
        'image' => 'https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2016/06/how-to-change-your-php-version.jpg',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
        khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sự dụng PHP kết hợp Laravel Framework',

        'start_date' => '5/2/2024',
        'fee' => '9.600.000 VNĐ',
        'duration' => 'Thời lượng: 36 giờ'
    ],

        //NET

    [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/.NET_Foundation_Logo.svg',
        'title' => 'KHÓA HỌC LẬP TRÌNH.NET',
        'description' => 'Phát triển ứng dụng web sử dụng nên tảng ASP.NET Core
        MVC.Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',

        'start_date' => '2/2024',
        'duration' => 'Thời lượng: 40 giờ',
        'fee' => '6.000.000 VNĐ',

    ],

    //SQL

        [
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/87/Sql_data_base_with_logo.png',
            'title' => 'LẬP TRÌNH SQL SERVER',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server
             như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cở sở dữ liệu,...',
            'start_date' => '2/2024',
            'fee' => '4.500.000 VNĐ',
            'duration' => 'Thời lượng: 30 giờ',

        ],

];



// Hiển thị danh sách khóa học
echo '<div class="main">';
echo '<h1 class="title">' . $courses1[0]['main content'] . '</h1>';


    echo'<div class="content1">';

foreach ($courses1 as $course) {
    echo '<div class="course">';
    echo '<img src="'.$course['image'].'"/>';
    // Kiểm tra sự tồn tại của các key trước khi sử dụng
    echo '<h3>' . (isset($course['title']) ? $course['title'] : '') . '</h3>';
    echo '<p>' . (isset($course['description']) ? $course['description'] : '') . '</p>';
    echo '<p class="hocphi">Học phí: ' . (isset($course['fee']) ? $course['fee'] : '') . '</p>';
    echo '<p class="khaigiang">Khai giảng: ' . (isset($course['start_date']) ? $course['start_date'] : '') . '</p>';
    echo '<p class="thoiluong">Thời lượng: ' . (isset($course['duration']) ? $course['duration'] : '') . '</p>';

    echo '</div>';
}
   echo' </div>';


echo'<div class="content2">';

foreach ($courses2 as $course2) {
    echo '<div class="course">';
    // Kiểm tra sự tồn tại của các key trước khi sử dụng
    echo '<img src="'.$course2['image'].'"/>';
    echo '<h3>' . (isset($course2['title']) ? $course2['title'] : '') . '</h3>';
    echo '<p>' . (isset($course2['description']) ? $course2['description'] : '') . '</p>';
    echo '<p class="hocphi">Học phí: ' . (isset($course2['fee']) ? $course2['fee'] : '') . '</p>';
    echo '<p class="khaigiang">Khai giảng: ' . (isset($course2['start_date']) ? $course2['start_date'] : '') . '</p>';
    echo '<p class = "thoiluong">Thời lượng: ' . (isset($course2['duration']) ? $course2['duration'] : '') . '</p>';
    echo '</div>';
}
echo' </div>';

echo' </div>';
?>