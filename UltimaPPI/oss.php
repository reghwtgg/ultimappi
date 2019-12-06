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
        <table border="1">
            <tr><th colspan="9">Ordens de Serviços Cadastradas</th><tr>
            <tr>
                <th>ID OS</th>
                <th>ID Cliente</th>
                <th>ID Aparelho</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
            <?php
            foreach ($result as $os) {
                echo "<tr>";
                echo "<td>" . $os->getId_os() . "</td>";
                echo "<td>" . $os->getId_cliente() . "</td>";
                echo "<td>" . $os->getId_aparelho() . "</td>";
                echo "<td>" . $os->getDescricao() . "</td>";
                echo "<td>" . $os->getEstado() . "</td>";
                echo "<td>" . $os->getValor() . "</td>";
                echo '<td><a href=alterarControllerOs.php?id=' . $os->getId_os() . '>Alterar</a></td>';
                echo '<td> <a href=excluirControllerOs.php?id=' . $os->getId_os() . '>Excluir</a></td>';
                echo "</tr>";
            }
            ?>
            
        </table>
    </div>
    </body>
</html>

