<?php

require_once 'Conexao.php';
require_once 'Aparelho.php';
$conexao = Conexao::getConexao();
$id = filter_input(INPUT_POST, "id");

$statement = $conexao->prepare("SELECT * FROM aparelho where id_aparelho=:id");
$statement->bindValue(":id", $id);

$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_CLASS, "Aparelho");
include 'aparelhos.php';
