
<html>
    <head>
        <title>Lista aparelhos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Id</th>
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
                echo '<td><a href=alterarController.php?id=' . $Aparelho->getId_aparelho() . '>Alterar</a></td>';
                echo '<td> <a href=excluirController.php?id=' . $Aparelho->getId_aparelho() . '>excluir</a></td>';
                echo "</tr>";
            }
            ?>
            <a href="index.php">Inicial</a>
        </table>
    </body>
</html>

