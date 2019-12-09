<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aparelho
 *
 * @author 2017315018
 */
class Aparelho {

    private $id_aparelho;
    private $id_cliente;
    private $modelo;
    private $marca;
    private $imei;

    public function getId_aparelho() {
        return $this->id_aparelho;
    }

    public function getId_cliente() {
        return $this->id_cliente;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getImei() {
        return $this->imei;
    }

    public function setId_aparelho($id_aparelho) {
        $this->id_aparelho = $id_aparelho;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setImei($imei) {
        $this->imei = $imei;
    }
   
      public function consultar($conexao) {
        $statement = $conexao->prepare("SELECT * FROM aparelho WHERE id_aparelho=:id");
        $statement->bindValue(":id", $this->id_aparelho);
        $executou = $statement->execute();
        if ($executou == false) {
            throw new Exception("Erro ao consultar produto!<br>" . $statement->errorInfo()[2]);
        }
        $aparelho = $statement->fetchObject("Aparelho");
        $this->id_aparelho = $aparelho->getId_aparelho();
        $this->id_cliente = $aparelho->getId_cliente();
        $this->modelo = $aparelho->getModelo();
        $this->marca = $aparelho->getMarca();
        $this->imei = $aparelho->getImei();
    }
    public function salvar($conexao) {
        if (!is_numeric($this->id_aparelho)) {
            $statement = $conexao->prepare("INSERT INTO aparelho (id_cliente,modelo,marca,imei) VALUES (:id_cliente,:modelo,:marca,:imei)");  
            $statement->bindValue(":id_cliente", $this->id_cliente);
            $statement->bindValue(":modelo", $this->modelo);
            $statement->bindValue(":marca", $this->marca);
            $statement->bindValue(":imei", $this->imei);
            $salvou = $statement->execute();
        } else {
            $statement = $conexao->prepare("UPDATE aparelho SET id_cliente=:id_cliente, modelo=:modelo, marca=:marca,imei=:imei WHERE id_aparelho=:id");
            $statement->bindValue(":id", $this->id_aparelho);
            $statement->bindValue(":id_cliente", $this->id_cliente);
            $statement->bindValue(":modelo", $this->modelo);
            $statement->bindValue(":marca", $this->marca);
            $statement->bindValue(":imei", $this->imei);
            $salvou = $statement->execute();
        }
        
    } 
    public function excluir($conexao) {
        $statement = $conexao->prepare("DELETE FROM aparelho WHERE id_aparelho=:id");
        $statement->bindValue(":id", $this->id_aparelho);
        $deletou = $statement->execute();

        if ($deletou == true) {
            header("Location: lista_aparelho.php");
        } else {
            $erro = "Erro ao deletar contato! " . $statement->errorInfo()[2];
            include_once 'erro.php';
        }
    }

}
