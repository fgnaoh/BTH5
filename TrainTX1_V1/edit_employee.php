<?php
require_once "models/Employee.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}
$id = $_GET['id'];

$employee = new Employee();
$data = $employee->getById($id);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<h2>Sửa nhân viên</h2>

<form action="actions/update_employee.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="name" value="<?= $data['name'] ?>" required><br>
    <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
    <input type="number" step="0.01" name="salary" value="<?= $data['salary'] ?>" required><br>
    <button type="submit">Cập nhật</button>
</form>

<br>
<a href="index.php">← Quay lại</a>
