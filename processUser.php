<?php
// processUser.php

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
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$urole = $_POST['urole'];

// Chèn dữ liệu vào bảng tbluser
$sql = "INSERT INTO tbluser (uname, upass, urole) 
        VALUES ('$uname', '$upass', $urole)";

if ($conn->query($sql) === TRUE) {
    echo "Người dùng đã được thêm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="inputUser.html"><button>Back to Enter User</button></a>