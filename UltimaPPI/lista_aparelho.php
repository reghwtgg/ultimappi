<?php
require_once 'Conexao.php';
require_once 'Aparelho.php';
$conexao = Conexao::getConexao();
$statement = $conexao->prepare("SELECT * FROM aparelho");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_CLASS, "Aparelho");
include 'aparelhos.php';
