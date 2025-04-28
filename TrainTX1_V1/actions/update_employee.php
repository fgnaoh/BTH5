<?php
require_once "../models/Employee.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    $employee = new Employee();
    $employee->update($id, $name, $email, $salary);
}

header("Location: ../index.php");
exit;
