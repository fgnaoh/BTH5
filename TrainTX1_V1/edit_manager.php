<?php
require_once "models/Manager.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}
$id = $_GET['id'];

$manager = new Manager();
$data = $manager->getById($id);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<h2>Sửa quản lý</h2>

<form action="actions/update_manager.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="name" value="<?= $data['name'] ?>" required><br>
    <input type="text" name="department" value="<?= $data['department'] ?>" required><br>
    <input type="number" step="0.01" name="bonus" value="<?= $data['bonus'] ?>" required><br>
    <button type="submit">Cập nhật</button>
</form>

<br>
<a href="index.php">← Quay lại</a>
