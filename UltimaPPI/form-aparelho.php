<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     
      
    </head>
    <body>
        
        <form method="POST" action="salvarControllerAparelho.php">
            <input value="<?php echo (isset($aparelho)) ? $aparelho->getId_aparelho() : ""; ?>" type="hidden" name="id">
            ID: <input value="<?php echo (isset($aparelho)) ? $aparelho->getId_aparelho() : ""; ?>" type="number" disabled="disabled"><br>
            
            ID Cliente: <input value="<?php echo (isset($aparelho)) ? $aparelho->getId_cliente() : ""; ?>" type="text" name="id_cliente"><br>
            Modelo : <input value="<?php echo (isset($aparelho)) ? $aparelho->getModelo() : ""; ?>" type="text" name="modelo"><br>
            Marca: <input value="<?php echo (isset($aparelho)) ? $aparelho->getMarca() : ""; ?>" type="text" name="marca"><br>
            IMEI : <input value="<?php echo (isset($aparelho)) ? $aparelho->getImei() : ""; ?>" type="text" name="imei"><br>
           <input type="submit" value="Salvar Contato">
            <a href=" index.php">Inicial</a> 
        </form>
        
    <?php  include 'lista_clientes.php' ?>

    </body>
</html>