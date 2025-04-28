<?php
require_once __DIR__ . '/../db.php';


class Manager {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM managers");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM managers WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($name, $department, $bonus) {
        $stmt = $this->conn->prepare("INSERT INTO managers (name, department, bonus) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $department, $bonus]);
    }

    public function update($id, $name, $department, $bonus) {
        $stmt = $this->conn->prepare("UPDATE managers SET name=?, department=?, bonus=? WHERE id=?");
        return $stmt->execute([$name, $department, $bonus, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM managers WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
