<?php

$id = filter_input(INPUT_GET, "id");

require_once 'Conexao.php';
require_once 'Cliente.php';
$conexao = Conexao::getConexao();

$cliente= new Cliente();
$cliente->setId($id);
try{
    $cliente->consultar($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die;
}

include_once 'form-cliente.php';
