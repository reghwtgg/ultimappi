<?php

$id = filter_input(INPUT_GET, "id");
require_once 'Cliente.php';
require_once 'Conexao.php';

$conexao = Conexao::getConexao();

$cliente= new Cliente();
$cliente->setId($id);

try{
    $cliente->excluir($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die;
}




