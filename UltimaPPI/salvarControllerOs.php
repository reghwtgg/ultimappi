<?php
require_once 'Conexao.php';
require_once 'Os.php';
$conexao = Conexao::getConexao();

$id = filter_input(INPUT_POST, "id");
$id_cliente = filter_input(INPUT_POST, "id_cliente");
$id_aparelho = filter_input(INPUT_POST, "id_aparelho");
$descricao = filter_input(INPUT_POST, "descricao");
$valor = filter_input(INPUT_POST, "valor");
$estado = filter_input(INPUT_POST, "estado");

$os= new Os();
$os->setId_os($id);
$os->setId_cliente($id_cliente);
$os->setId_aparelho($id_aparelho);
$os->setDescricao($descricao);
$os->setValor($valor);
$os->setEstado($estado);
try{
    $salvou = $os->salvar($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die();
}
header("Location: lista_os.php");

