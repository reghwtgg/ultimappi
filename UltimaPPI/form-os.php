<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - ECELL</title>
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
        <form method="POST" action="salvarControllerOs.php" class="form-horizontal">
                    <fieldset>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getId_os() : ""; ?>" type="hidden" name="id" class="form-control"/></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">ID OS: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getId_os() : ""; ?>" type="number" disabled="disabled" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">ID Cliente: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getId_cliente() : ""; ?>" type="text" name="id_cliente" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">ID Aparelho: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getId_Aparelho() : ""; ?>" type="text" name="id_aparelho" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Descrição:</label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getDescricao() : ""; ?>" type="text" name="descricao" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Valor: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getValor() : ""; ?>" type="text" name="valor" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Estado/Status: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($os)) ? $os->getEstado() : ""; ?>" type="text" name="estado" class="form-control"/>
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