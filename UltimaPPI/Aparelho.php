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
    function getId_aparelho() {
        return $this->id_aparelho;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getMarca() {
        return $this->marca;
    }

    function getImei() {
        return $this->imei;
    }

    function setId_aparelho($id_aparelho) {
        $this->id_aparelho = $id_aparelho;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setImei($imei) {
        $this->imei = $imei;
    }


}
