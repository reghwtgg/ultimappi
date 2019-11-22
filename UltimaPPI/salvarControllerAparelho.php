<?php

require_once 'Conexao.php';
$conexao = Conexao::getConexao();

$id_aparelho = filter_input(INPUT_POST, "id_aparelho");
$id_cliente = filter_input(INPUT_POST, "id_cliente");
$modelo = filter_input(INPUT_POST, "modelo");
$marca = filter_input(INPUT_POST, "marca");
$imei = filter_input(INPUT_POST, "imei");




if (!is_numeric($id)) {

    $statement = $conexao->prepare("INSERT INTO aparelho (id_cliente,modelo,marca,imei) VALUES (:id_cliente,:modelo,:marca,:imei)");
    $statement->bindValue(":id_cliente", $id_cliente);
    $statement->bindValue(":modelo", $modelo);
    $statement->bindValue(":marca", $marca);
    $statement->bindValue(":imei", $imei);
    $salvou = $statement->execute();
} else {
    $statement = $conexao->prepare("UPDATE aparelho SET id_cliente=:id_cliente, modelo=:modelo, marca=:marca,imei=:imei WHERE id=:id");
    $statement->bindValue(":id", $id_aparelho);
    $statement->bindValue(":id_cliente", $id_cliente);
    $statement->bindValue(":modelo", $modelo);
    $statement->bindValue(":marca", $marca);
    $statement->bindValue(":imei", $imei);
    $salvou = $statement->execute();
}


if ($salvou == true) {
    header("Location: lista_aparelho.php");
} else {
    $erro = "Erro ao salvar o contato! " . $statement->errorInfo()[2];
    include_once 'erro.php';
}