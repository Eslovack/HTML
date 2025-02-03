<?php
include 'Banco.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM carros WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    echo "Carro excluído com sucesso!";
} else {
    echo "ID do carro não fornecido!";
}
?>
