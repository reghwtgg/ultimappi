<?php
    require_once 'Conexao.php';
    require_once 'Cliente.php';
    $conexao = Conexao::getConexao();
    $statement = $conexao->prepare("SELECT * FROM cliente");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS, "Cliente");
    include 'clientes.php';
