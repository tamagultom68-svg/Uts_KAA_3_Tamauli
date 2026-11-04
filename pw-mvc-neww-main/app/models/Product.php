<?php
class Product
{
    private PDO $db;
    public function __construct(PDO $db) { $this->db = $db; }

    public function all(): array {
        return $this->db->query("SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON c.id=p.category_id ORDER BY p.id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find(int $id): ?array {
        $stmt=$this->db->prepare("SELECT * FROM products WHERE id=?");
        $stmt->execute([$id]); $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }
    public function create(array $d): bool {
        $stmt=$this->db->prepare("INSERT INTO products (name,price,stock,category_id) VALUES (?,?,?,?)");
        return $stmt->execute([$d['name'],$d['price'],$d['stock'],$d['category_id'] ?: null]);
    }
    public function update(int $id,array $d): bool {
        $stmt=$this->db->prepare("UPDATE products SET name=?,price=?,stock=?,category_id=? WHERE id=?");
        return $stmt->execute([$d['name'],$d['price'],$d['stock'],$d['category_id'] ?: null,$id]);
    }
    public function delete(int $id): bool {
        $stmt=$this->db->prepare("DELETE FROM products WHERE id=?");
        return $stmt->execute([$id]);
    }
    public function count(): int { return (int)$this->db->query("SELECT COUNT(*) FROM products")->fetchColumn(); }
}
