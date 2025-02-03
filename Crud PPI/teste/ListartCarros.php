<?php
include 'Conexao.php';

$sql = "SELECT * FROM carros";
$stmt = $pdo->query($sql);
$carros = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($carros as $carro) {
    echo "ID: " . $carro['id'] . "<br>";
    echo "Marca: " . $carro['marca'] . "<br>";
    echo "Modelo: " . $carro['modelo'] . "<br>";
    echo "Ano: " . $carro['ano'] . "<br>";
    echo "Cor: " . $carro['cor'] . "<br>";
    echo "Placa: " . $carro['placa'] . "<br><br>";
}
?>
