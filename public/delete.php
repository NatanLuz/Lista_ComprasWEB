<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../src/ItemRepository.php';

$id = (int) ($_GET['id'] ?? 0);

if ($id > 0) {
	$repository = new ItemRepository($pdo);
	$repository->delete($id);
}

header('Location: index.php');
exit;

?>
