<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danh sách khóa học</title>

</head>
<body>

<div class = "container">
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/24',
            'duration' => '2 - 2.5 năm',
            'image' => 'img/anh1.jpg'
        ],

        [
            'title' => 'Lập trình Web Fullstack',
            'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => 'Ưu đãi giảm 15%',
            'start_date' => '2/24',
            'duration' => '6 tháng',
            'image' => 'img/anh2.jpg'
        ],

        [
            'title' => 'Lập trình Java Fullstack',
            'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
            'fee' => 'Ưu đãi giảm 15%',
            'start_date' => '2/24',
            'duration' => '236 giờ',
            'image' => 'img/anh3.jpg'
        ],

        [
            'title' => 'Lập trình PHP & Laravel',
            'description' => 'PHP là một trong những ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
            'fee' => '9.600.000 VND',
            'start_date' => '5/2/24',
            'duration' => '36 giờ ',
            'image' => 'img/anh4.jpg'
        ],

        [
            'title' => 'KHÓA HỌC LẬP TRÌNH .NET ',
            'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
            'fee' => '6.000.000 VND',
            'start_date' => '2/24',
            'duration' => '4 giờ',
            'image' => 'img/anh5.jpg'
        ],

        [
            'title' => 'Lập trình SQL SERVER',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
            'fee' => '4.500.000 VND',
            'start_date' => '2/24',
            'duration' => '30 giờ',
            'image' => 'img/anh6.jpg'
        ],
        // Thêm các khóa học khác vào đây
    ];
    // Hiển thị danh sách khóa học
    foreach ($courses as $course) {
        echo '<div class="course">';
        if (isset($course['image'])) {
            echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">';
        }
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p class = "hoc phi">Học phí: ' . $course['fee'] . '</p>';
        echo '<p class = "khai giang">Khai giảng: ' . $course['start_date'] . '</p>';
        echo '<p class = "thoi luong">Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>