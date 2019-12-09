<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author 2017315018
 */
class Cliente {

    private $id;
    private $nome;
    private $telefone;
    private $documento;
    private $endereco;
    private $bairro;

    public function getId() {
        return $this->id;
    }

     public function getNome() {
        return $this->nome;
    }

     public function getTelefone() {
        return $this->telefone;
    }

     public function getDocumento() {
        return $this->documento;
    }

     public function getEndereco() {
        return $this->endereco;
    }

     public function getBairro() {
        return $this->bairro;
    }

    public  function setId($id) {
        $this->id = $id;
    }

   public function setNome($nome) {
        $this->nome = $nome;
    }

     public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

     public function setDocumento($documento) {
        $this->documento = $documento;
    }

     public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

     public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function consultar($conexao) {
        $statement = $conexao->prepare("SELECT * FROM cliente WHERE id=:id");
        $statement->bindValue(":id", $this->id);
        $executou = $statement->execute();
        if ($executou == false) {
            throw new Exception("Erro ao consultar produto!<br>" . $statement->errorInfo()[2]);
        }
        $cliente = $statement->fetchObject("Cliente");
        $this->nome = $cliente->getNome();
        $this->telefone = $cliente->getTelefone();
        $this->documento = $cliente->getDocumento();
        $this->endereco = $cliente->getEndereco();
        $this->bairro = $cliente->getBairro();
    }

   public function salvar($conexao) {
        if (!is_numeric($this->id)) {
            $statement = $conexao->prepare("INSERT INTO cliente (nome,telefone,endereco,documento,bairro) VALUES (:nome,:telefone,:endereco,:documento,:bairro)");       
            $statement->bindValue(":nome", $this->nome);
            $statement->bindValue(":telefone", $this->telefone);
            $statement->bindValue(":endereco", $this->endereco);
            $statement->bindValue(":documento", $this->documento);
            $statement->bindValue(":bairro", $this->bairro); 
            $salvou = $statement->execute();
        } else {
            $statement = $conexao->prepare("UPDATE cliente SET nome=:nome, telefone=:telefone,endereco=:endereco,documento=:documento,bairro=:bairro WHERE id=:id");
            $statement->bindValue(":id", $this->id);
            $statement->bindValue(":nome", $this->nome);
            $statement->bindValue(":telefone", $this->telefone);
            $statement->bindValue(":endereco", $this->endereco);
            $statement->bindValue(":documento", $this->documento);
            $statement->bindValue(":bairro", $this->bairro);
            $salvou = $statement->execute();
        }
        if ($salvou == false) {
            throw new Exception("Erro ao gravar o produto!<br>" . $statement->errorInfo()[2]);
            include_once 'erro.php';
        }
    }

    public function excluir($conexao) {
        $statement = $conexao->prepare("DELETE FROM cliente WHERE id=:id");
        $statement->bindValue(":id", $this->id);
        $deletou = $statement->execute();

        if ($deletou == true) {
            header("Location: lista_clientes.php");
        } else {
            $erro = "Erro ao deletar contato! " . $statement->errorInfo()[2];
            include_once 'erro.php';
        }
    }

}
