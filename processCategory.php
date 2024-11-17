<?php
// processCategory.php

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

// Lấy dữ liệu từ form
$name = $_POST['name'];
$description = $_POST['description'];

// Chèn dữ liệu vào bảng tblcategory
$sql = "INSERT INTO tblcategory (name, description) 
        VALUES ('$name', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Nhóm hàng đã được thêm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="inputCategory.html"><button>Back to Enter Category</button></a>
