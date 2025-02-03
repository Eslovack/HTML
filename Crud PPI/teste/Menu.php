<?php
include 'Banco.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'delete' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM carros WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        echo "Carro excluído";
    }
}

$sql = "SELECT * FROM carros";
$stmt = $pdo->query($sql);
$carros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Cadastrados</title>
</head>
<body>
    <h1>Romulo Automoveis</h1>
    <ul>
        <li><a href="cadastrarCarros.php">Cadastrar Carro</a></li>
    </ul>
    
    <h2>Carros Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Placa</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($carros as $carro): ?>
            <tr>
                <td><?= $carro['id'] ?></td>
                <td><?= $carro['marca'] ?></td>
                <td><?= $carro['modelo'] ?></td>
                <td><?= $carro['ano'] ?></td>
                <td><?= $carro['cor'] ?></td>
                <td><?= $carro['placa'] ?></td>
                <td>
                    <a href="update.php?id=<?= $carro['id'] ?>">Editar</a> |
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $carro['id'] ?>">
                        <input type="hidden" name="action" value="delete">
                        <input type="submit" value="Excluir" onclick="return confirm('Tem certeza que deseja excluir?');">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
