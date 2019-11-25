<?php
require_once 'Conexao.php';
require_once 'Aparelho.php';
$conexao = Conexao::getConexao();

$id_aparelho = filter_input(INPUT_POST, "id_aparelho");
$id_cliente = filter_input(INPUT_POST, "id_cliente");
$modelo = filter_input(INPUT_POST, "modelo");
$marca = filter_input(INPUT_POST, "marca");
$imei = filter_input(INPUT_POST, "imei");


$aparelho = new Aparelho();
$aparelho->setId_aparelho($id_aparelho);
$aparelho->setId_cliente($id_cliente);
$aparelho->setImei($imei);
$aparelho->setMarca($marca);
$aparelho->setModelo($modelo);


try{
    $salvou = $aparelho->salvar($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die();
}
header("Location: lista_aparelho.php");

