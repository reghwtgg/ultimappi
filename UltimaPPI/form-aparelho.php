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
                <form method="POST" action="salvarControllerAparelho.php" class="form-horizontal">
                    <fieldset>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($aparelho)) ? $aparelho->getId_aparelho() : ""; ?>" type="hidden" name="id" class="form-control"/></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">ID: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($aparelho)) ? $aparelho->getId_aparelho() : ""; ?>" type="number" disabled="disabled" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">ID Cliente: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($aparelho)) ? $aparelho->getId_cliente() : ""; ?>" type="text" name="id_cliente" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Modelo : </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($aparelho)) ? $aparelho->getModelo() : ""; ?>" type="text" name="modelo" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Marca: </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($aparelho)) ? $aparelho->getMarca() : ""; ?>" type="text" name="marca" class="form-control"/>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">IMEI : </label>
                            <div class="col-lg-10">
                                <input value="<?php echo (isset($aparelho)) ? $aparelho->getImei() : ""; ?>" type="text" name="imei" class="form-control"/>
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
        </div>
        
    
        <div id="rodape">
            
        </div>
    </body>
</html>