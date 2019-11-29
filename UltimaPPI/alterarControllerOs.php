<?php

$id = filter_input(INPUT_GET, "id");
$id_cliente = filter_input(INPUT_POST, "id_cliente");
$id_aparelho = filter_input(INPUT_POST, "id_aparelho");
$descricao = filter_input(INPUT_POST, "descricao");
$valor = filter_input(INPUT_POST, "valor");
$estado = filter_input(INPUT_POST, "estado");
require_once 'Conexao.php';
require_once 'Os.php';
$conexao = Conexao::getConexao();

$os= new Os();
$os->SetId_os($id);

try{
    $os->consultar($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die;
}

include_once 'form-os.php';
