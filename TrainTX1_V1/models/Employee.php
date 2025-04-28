<?php
require_once __DIR__ . '/../db.php';


class Employee {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM employees");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($name, $email, $salary) {
        $stmt = $this->conn->prepare("INSERT INTO employees (name, email, salary) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $salary]);
    }

    public function update($id, $name, $email, $salary) {
        $stmt = $this->conn->prepare("UPDATE employees SET name=?, email=?, salary=? WHERE id=?");
        return $stmt->execute([$name, $email, $salary, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM employees WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
