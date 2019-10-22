<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require 'classes/Cliente.php';
        
        $cli = new Cliente();
        $clientes = $cli->listar();
                
        ?>
        
        <a href="adicionar.php">Novo cliente</a>;
        <a href="editar.php">editar</a>;
        
        <table>
            <thead>
                <tr>
                    <td>Cód</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Telefone</td>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($clientes as $c) { ?>
                    
                <tr>
                    <td><?php echo $c ['codcli']; ?></td>
                    <td><?php echo $c ['nomcli']; ?></td>
                    <td><?php echo $c ['endcli']; ?></td>
                    <td><?php echo $c ['telcli']; ?></td>
                </tr>
                    
                <?php } ?>
                            
            </tbody>
            
        </table>
        
    </body>
</html>
