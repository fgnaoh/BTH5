<?php
require_once "models/Employee.php";
require_once "models/Manager.php";

$employee = new Employee();
$manager = new Manager();

$employees = $employee->getAll();
$managers = $manager->getAll();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Nhân viên và Quản lý</title>
</head>
<body>
    <h1>Quản lý nhân sự</h1>

    <!-- Nút thêm mới -->
    <a href="add.php">
        <button> Thêm mới</button>
    </a>

    <h2>Danh sách Nhân viên</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Lương</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($employees as $e): ?>
        <tr>
            <td><?= $e['id'] ?></td>
            <td><?= $e['name'] ?></td>
            <td><?= $e['email'] ?></td>
            <td><?= $e['salary'] ?></td>
            <td>
                <a href="edit_employee.php?id=<?= $e['id'] ?>">✏️ Sửa</a> | 
                <a href="actions/delete.php?role=employee&id=<?= $e['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên này?');">🗑️ Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Danh sách Quản lý</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Phòng ban</th>
            <th>Tiền thưởng</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($managers as $m): ?>
        <tr>
            <td><?= $m['id'] ?></td>
            <td><?= $m['name'] ?></td>
            <td><?= $m['department'] ?></td>
            <td><?= $m['bonus'] ?></td>
            <td>
                <a href="edit_manager.php?id=<?= $m['id'] ?>">✏️ Sửa</a> | 
                <a href="actions/delete.php?role=manager&id=<?= $m['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa quản lý này?');">🗑️ Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
