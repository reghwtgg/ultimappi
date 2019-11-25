<?php
require_once 'Aparelho.php';
require_once 'Conexao.php';
$id_aparelho = filter_input(INPUT_GET, "id");
$conexao = Conexao::getConexao();

$aparelho= new Aparelho();
$aparelho->setId_aparelho($id_aparelho);

try{
    $aparelho->excluir($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die;
}




