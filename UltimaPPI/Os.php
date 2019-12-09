<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Os
 *
 * @author 2017315018
 */
class Os {

    private $id_os;
    private $id_cliente;
    private $id_aparelho;
    private $descricao;
    private $valor;
    private $estado;

    public function getId_os() {
        return $this->id_os;
    }

    public function getId_cliente() {
        return $this->id_cliente;
    }

    public function getId_aparelho() {
        return $this->id_aparelho;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId_os($id_os) {
        $this->id_os = $id_os;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function setId_aparelho($id_aparelho) {
        $this->id_aparelho = $id_aparelho;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

  public function consultar($conexao) {
        $statement = $conexao->prepare("SELECT * FROM os WHERE id_os=:id");
        $statement->bindValue(":id", $this->id_os);
        $executou = $statement->execute();
        if ($executou == false) {
            throw new Exception("Erro ao consultar produto!<br>" . $statement->errorInfo()[2]);
        }
        $os = $statement->fetchObject("Os");
        $this->id_os = $os->getId_os();
        $this->id_cliente = $os->getId_cliente();
        $this->id_aparelho = $os->getId_aparelho();
        $this->descricao = $os->getDescricao();
        $this->valor = $os->getValor();
        $this->estado = $os->getEstado();

        
    }
    public function salvar($conexao) {
        if (!is_numeric($this->id_os)) {

            $statement = $conexao->prepare("INSERT INTO os (id_cliente,id_aparelho,descricao,valor,estado) VALUES (:id_cliente,:id_aparelho,:descricao,:valor,:estado)");

            $statement->bindValue(":id_cliente", $this->id_cliente);
            $statement->bindValue(":id_aparelho", $this->id_aparelho);
            $statement->bindValue(":descricao", $this->descricao);
            $statement->bindValue(":valor", $this->valor);
            $statement->bindValue(":estado", $this->estado);

            $salvou = $statement->execute();
        } else {
            $statement = $conexao->prepare("UPDATE os SET id_cliente=:id_cliente, id_aparelho=:id_aparelho,descricao=:descricao,valor=:valor,estado=:estado WHERE id_os=:id");
            $statement->bindValue(":id", $this->id_os);
            $statement->bindValue(":id_cliente", $this->id_cliente);
            $statement->bindValue(":id_aparelho", $this->id_aparelho);
            $statement->bindValue(":descricao", $this->descricao);
            $statement->bindValue(":valor", $this->valor);
            $statement->bindValue(":estado", $this->estado);
            $salvou = $statement->execute();
        }
        if ($salvou == false) {
            throw new Exception("Erro ao gravar o produto!<br>" . $statement->errorInfo()[2]);
        }
    }

    public function excluir($conexao) {
        $statement = $conexao->prepare("DELETE FROM os WHERE id_os=:id");
        $statement->bindValue(":id", $this->id_os);
        $deletou = $statement->execute();

        if ($deletou == true) {
            header("Location: lista_os.php");
        } else {
            $erro = "Erro ao deletar contato! " . $statement->errorInfo()[2];
            include_once 'erro.php';
        }
    }

}
