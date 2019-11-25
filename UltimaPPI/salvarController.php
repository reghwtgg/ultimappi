<?php
require_once 'Conexao.php';
require_once 'Cliente.php';
$conexao = Conexao::getConexao();

$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome");
$telefone = filter_input(INPUT_POST, "telefone");
$endereco = filter_input(INPUT_POST, "endereco");
$documento = filter_input(INPUT_POST, "documento");
$bairro = filter_input(INPUT_POST, "bairro");

$cliente= new Cliente();
$cliente->setId($id);
$cliente->setNome($nome);
$cliente->setTelefone($telefone);
$cliente->setEndereco($endereco);
$cliente->setDocumento($documento);
$cliente->setBairro($bairro);
try{
    $salvou = $cliente->salvar($conexao);
} catch (Exception $ex) {
    $erro = $ex->getMessage();
    include_once 'erro.php';
    die();
}
header("Location: lista_clientes.php");

