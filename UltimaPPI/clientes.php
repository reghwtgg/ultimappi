
<html>
    <head>
        <title>Essa</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone </th>
                <th>Documento</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Aparelhos</th>
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
                echo '<td><a href=lista_aparelhos.php?id=' . $Cliente->getId() . '>Lista</a></td>';
                echo '<td><a href=alterarController.php?id=' . $Cliente->getId() . '>Alterar</a></td>';
                echo '<td> <a href=excluirController.php?id=' . $Cliente->getId() . '>excluir</a></td>';
                echo "</tr>";
            }
            ?>
            <a href="index.php">Inicial</a>
        </table>
    </body>
</html>

