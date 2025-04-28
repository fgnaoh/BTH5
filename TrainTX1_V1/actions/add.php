<?php
require_once "../models/Employee.php";
require_once "../models/Manager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $name = $_POST['name'];

    if ($role == "employee") {
        $email = $_POST['email'];
        $salary = $_POST['salary'];

        $employee = new Employee();
        $employee->add($name, $email, $salary);
    } elseif ($role == "manager") {
        $department = $_POST['department'];
        $bonus = $_POST['bonus'];

        $manager = new Manager();
        $manager->add($name, $department, $bonus);
    }
} 

header("Location: ../index.php");
// exit;
