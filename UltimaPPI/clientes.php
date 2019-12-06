
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clientes Cadastrados - ECELL</title>
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
                <tr><th colspan="9">Clientes Cadastrados</th><tr>
                <tr>
                    <th>ID Cliente</th>
                    <th>Nome</th>
                    <th>Telefone </th>
                    <th>Documento</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Aparelho</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
                <?php
                    foreach ($result as $Cliente) {
                        echo "<tr>";
                        echo "<td>" . $Cliente->getId() . "</td>";
                        echo "<td>" . $Cliente->getNome() . "</td>";
                        echo "<td>" . $Cliente->getTelefone() . "</td>";
                        echo "<td>" . $Cliente->getDocumento() . "</td>";
                        echo "<td>" . $Cliente->getEndereco() . "</td>";
                        echo "<td>" . $Cliente->getBairro() . "</td>";
                        echo '<td><a href=lista_aparelho.php?id=' . $Cliente->getId() . '>Lista</a></td>';
                        echo '<td><a href=alterarController.php?id=' . $Cliente->getId() . '>Alterar</a></td>';
                        echo '<td> <a href=excluirController.php?id=' . $Cliente->getId() . '>Excluir</a></td>';
                        echo "</tr>";
                    }
                ?>
                
            </table>
        </div>
        <br>
        <br>
    </body>
</html>

