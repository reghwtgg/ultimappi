
<html>
    <head>
        <title>Essa</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Id OS</th>
                <th>Id Cliente</th>
                <th>Id Aparelho</th>
                <th>Descrição </th>
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
                echo '<td> <a href=excluirControllerOs.php?id=' . $os->getId_os() . '>excluir</a></td>';
                echo "</tr>";
            }
            ?>
            <a href="index.php">Inicial</a>
        </table>
    </body>
</html>

