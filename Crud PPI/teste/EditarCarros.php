<?php
include 'Conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $cor = $_POST['cor'];
        $placa = $_POST['placa'];

        $sql = "UPDATE carros SET marca = ?, modelo = ?, ano = ?, cor = ?, placa = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$marca, $modelo, $ano, $cor, $placa, $id]);

        echo "Carro atualizado";
    } else {
        $sql = "SELECT * FROM carros WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $carro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($carro) {
            $marca = $carro['marca'];
            $modelo = $carro['modelo'];
            $ano = $carro['ano'];
            $cor = $carro['cor'];
            $placa = $carro['placa'];
        } else {
            echo "Carro n encontrando";
            exit;
        }
    }
} else {
    echo "ID do carro n fornecido";
    exit;
}
?>

<form method="POST">
    Marca: <input type="text" name="marca" value="<?= $marca ?>" required><br>
    Modelo: <input type="text" name="modelo" value="<?= $modelo ?>" required><br>
    Ano: <input type="number" name="ano" value="<?= $ano ?>" required><br>
    Cor: <input type="text" name="cor" value="<?= $cor ?>" required><br>
    Placa: <input type="text" name="placa" value="<?= $placa ?>" required><br>
    <input type="submit" value="atualizarCarro">
</form>
