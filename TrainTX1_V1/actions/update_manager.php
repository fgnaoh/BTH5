<?php
require_once "../models/Manager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $bonus = $_POST['bonus'];

    $manager = new Manager();
    $manager->update($id, $name, $department, $bonus);
}

header("Location: ../index.php");
exit;
