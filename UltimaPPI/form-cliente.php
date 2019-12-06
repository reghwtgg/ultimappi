<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Cliente - ECELL</title>
        <link href="boniteza.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="cabeca">
            <div>
                <img src="ecell-logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Clientes</a>
                        <ul>
                            <li><a href="lista_clientes.php"> Cadastrados</a></li>
                            <li><a href="form-cliente.php"> Cadastrar</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Aparelhos</a>
                        <ul>
                            <li><a href="lista_aparelho.php">Cadastrados</a></li>
                            <li><a href="form-aparelho.php"> Cadastrar </a></li>
                        </ul>
                    </li>
                    <li><a href="#">Ordem de Serviços</a>
                        <ul>
                            <li><a href="lista_os.php">Cadastrados</a></li>
                            <li><a href="form-os.php"> Cadastrar </a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <br><br><br>
        <div id="corpo">
        <form method="POST" action="salvarController.php" class="form-horizontal">
                    <fieldset>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getId() : ""; ?>" type="hidden" name="id" class="form-control"/></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">ID: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getId() : ""; ?>" type="number" disabled="disabled" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nome: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getNome() : ""; ?>" type="text" name="nome" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Telefone </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getTelefone() : ""; ?>" type="text" name="telefone" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Endereço</label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getEndereco() : ""; ?>" type="text" name="endereco" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Documento: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getDocumento() : ""; ?>" type="text" name="documento" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Bairro: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($cliente)) ? $cliente->getBairro() : ""; ?>" type="text" name="bairro" class="form-control"/>
                            </div>
                        </div>

                        <br>
                        <br>
                        <input type="submit" value="Salvar Contato">
                        <br>
                        <br>
                    </fieldset>
                </form>
        
    </div>
    </body>
</html>