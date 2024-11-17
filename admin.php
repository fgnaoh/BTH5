<?php
// admin.php

// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            margin-top: 20px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-size: 18px;
            padding: 10px 20px;
            background-color: #e0e0e0;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <h1>Trang Quản Trị</h1>
</header>

<nav>
    <a href="inputUser.html">Nhập Người Dùng</a>
    <a href="inputCategory.html">Nhập Nhóm Hàng</a>
</nav>

</body>
</html>

<?php
// Đóng kết nối
$conn->close();
?>
