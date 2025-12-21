<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../src/ItemRepository.php';

$repository = new ItemRepository($pdo);
$items = $repository->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Compras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Compras</h1>
        <form method="POST" action="add.php" class="form-flex-col">
            <div class="form-row">
                <input type="text" name="name" placeholder="Item" required>
                <input type="number" name="quantity" min="1" value="1">
            </div>
            <button type="submit">Adicionar</button>
        </form>
    </div>
    <ul class="product-list">
        <?php foreach ($items as $item): ?>
        <li>
            <span>
            <?php if ($item['is_purchased']): ?>
                <s><?= htmlspecialchars($item['name']) ?></s>
            <?php else: ?>
                <?= htmlspecialchars($item['name']) ?>
            <?php endif; ?>
            (<?= $item['quantity'] ?>)
            </span>
            <span class="actions">
                <a href="toggle.php?id=<?= $item['id'] ?>">
                    <?= $item['is_purchased'] ? 'Desmarcar' : 'Marcar' ?>
                </a>
                <a href="delete.php?id=<?= $item['id'] ?>" onclick="return confirm('Excluir item?')">
                    Excluir
                </a>
            </span>
        </li>
        <?php endforeach; ?>
    </ul>
    </div>
</body>
</html>