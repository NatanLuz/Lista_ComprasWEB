<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../src/ItemRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $quantity = (int) ($_POST['quantity'] ?? 1);

    if ($name !== '' && $quantity > 0) {
        $repository = new ItemRepository($pdo);
        $repository->add($name, $quantity);
    }

    header('Location: index.php');
    exit;
}