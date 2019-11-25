<?php
require_once 'Conexao.php';
require_once 'Os.php';
$conexao = Conexao::getConexao();
$statement = $conexao->prepare("SELECT * FROM os");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_CLASS, "Os");
include 'oss.php';
