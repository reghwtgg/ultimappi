<?php

$id = filter_input(INPUT_GET, "id");
require_once 'Os.php';
require_once 'Conexao.php';

$conexao = Conexao::getConexao();

$os= new Os();
$os->setId_os($id);

try{
    $os->excluir($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die;
}




