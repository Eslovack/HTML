<?php
include 'Banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];

    $sql = "INSERT INTO carros (marca, modelo, ano, cor, placa) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$marca, $modelo, $ano, $cor, $placa]);

    echo "Carro cadastrado com sucesso!";
}
?>

<form method="POST">
    Marca: <input type="text" name="marca" required><br>
    Modelo: <input type="text" name="modelo" required><br>
    Ano: <input type="number" name="ano" required><br>
    Cor: <input type="text" name="cor" required><br>
    Placa: <input type="text" name="placa" required><br>
    <input type="submit" value="Cadastrar Carro">
</form>
