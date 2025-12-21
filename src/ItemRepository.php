<?php

class ItemRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM items ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function add(string $name, int $quantity): void
    {
        $sql = "INSERT INTO items (name, quantity) VALUES (:name, :quantity)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':name' => $name,
            ':quantity' => $quantity
        ]);
    }

    public function toggle(int $id): void
    {
        $sql = "UPDATE items 
                SET is_purchased = NOT is_purchased 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
    }

    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM items WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}