<?php 
    include_once("db.php");
    
    function save($nome,$email){
        $db = conecta();

        $sql = "insert into usuario (nome,email) values (?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$email);
        $stmt->execute();
    }
    /*função retorna um array com usuario*/
    function recupera_lista_usuarios(){
    $db = conecta();
    $sql = "select * from usuario";
    $stmt = $db ->prepare(query: $sql);
    $stmt -> execute();
    $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultado);
    }
recupera_lista_usuarios();
?>