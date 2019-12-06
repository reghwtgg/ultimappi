<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aparelhos Cadastrados- ECELL</title>
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
        <table border="1">
            <tr><th colspan="9">Aparelhos Cadastrados</th><tr>
            <tr>
                <th>ID Aparelho</th>
                <th>Id Cliente</th>
                <th>Modelo </th>
                <th>Marca</th>
                <th>IMEI</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
            <?php
            foreach ($result as $Aparelho) {
                echo "<tr>";
                echo "<td>" . $Aparelho->getId_Aparelho() . "</td>";
                echo "<td>" . $Aparelho->getId_Cliente() . "</td>";
                echo "<td>" . $Aparelho->getModelo() . "</td>";
                echo "<td>" . $Aparelho->getMarca() . "</td>";
                echo "<td>" . $Aparelho->getImei() . "</td>";            
                echo '<td><a href=alterarControllerAparelho.php?id=' . $Aparelho->getId_aparelho() . '>Alterar</a></td>';
                echo '<td> <a href=excluirControllerAparelho.php?id=' . $Aparelho->getId_aparelho() . '>Excluir</a></td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    </body>
</html>

