<?php
require_once "../models/Employee.php";
require_once "../models/Manager.php";

if (isset($_GET['role']) && isset($_GET['id'])) {
    $role = $_GET['role'];
    $id = $_GET['id'];

    if ($role == "employee") {
        $employee = new Employee();
        $employee->delete($id);
    } elseif ($role == "manager") {
        $manager = new Manager();
        $manager->delete($id);
    }
}

header("Location: ../index.php");
exit;
