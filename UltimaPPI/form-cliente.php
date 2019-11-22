<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     
      
    </head>
    <body>
        
        <form method="POST" action="salvarController.php">
            <input value="<?php echo (isset($cliente)) ? $cliente->getId() : ""; ?>" type="hidden" name="id">
            ID: <input value="<?php echo (isset($cliente)) ? $cliente->getId() : ""; ?>" type="number" disabled="disabled"><br>
            Nome: <input value="<?php echo (isset($cliente)) ? $cliente->getNome() : ""; ?>" type="text" name="nome"><br>
            Telefone : <input value="<?php echo (isset($cliente)) ? $cliente->getTelefone() : ""; ?>" type="text" name="telefone"><br>
            Endereco : <input value="<?php echo (isset($cliente)) ? $cliente->getEndereco() : ""; ?>" type="text" name="endereco"><br>
            Documento : <input value="<?php echo (isset($cliente)) ? $cliente->getDocumento() : ""; ?>" type="text" name="documento"><br>
            Bairro : <input value="<?php echo (isset($cliente)) ? $cliente->getBairro() : ""; ?>" type="text" name="bairro"><br>
            <input type="submit" value="Salvar Contato">
            <a href=" index.php">Inicial</a> 
        </form>

    </body>
</html>