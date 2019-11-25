<?php

$id_aparelho = filter_input(INPUT_GET, "id");

require_once 'Conexao.php';
require_once 'Aparelho.php';
$conexao = Conexao::getConexao();

$aparelho= new Aparelho();
$aparelho->setId_aparelho($id_aparelho);
try{
    $aparelho->consultar($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die;
}

include_once 'form-aparelho.php';
