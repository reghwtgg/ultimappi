<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     
      
    </head>
    <body>
        
        <form method="POST" action="salvarControllerOs.php">
            <input value="<?php echo (isset($os)) ? $os->getId_os() : ""; ?>" type="hidden" name="id">
            ID: <input value="<?php echo (isset($os)) ? $os->getId_os() : ""; ?>" type="number" disabled="disabled"><br>
            ID Cliente: <input value="<?php echo (isset($os)) ? $os->getId_cliente() : ""; ?>" type="text" name="id_cliente"><br>
            ID Aparelho: <input value="<?php echo (isset($os)) ? $os->getId_Aparelho() : ""; ?>" type="text" name="id_aparelho"><br>
            Descrição : <input value="<?php echo (isset($os)) ? $os->getDescricao() : ""; ?>" type="text" name="descricao"><br>
            Valor: <input value="<?php echo (isset($os)) ? $os->getValor() : ""; ?>" type="text" name="valor"><br>
            Estado/Status : <input value="<?php echo (isset($os)) ? $os->getEstado() : ""; ?>" type="text" name="estado"><br>
           <input type="submit" value="Salvar Contato">
            <a href=" index.php">Inicial</a> 
        </form>
        
    <?php  include 'lista_clientes.php' ?>

    </body>
</html>