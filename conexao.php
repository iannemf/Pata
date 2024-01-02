<?php
        $host = "localhost"; //Endereço do Servidor
        $usuario = "root"; //Nome do usuario do bd MYSQL
        $senha = "Diego"; //A senha do Banco MYSQL
        $dbname = "Patas_Felizes"; // nome do banco de dados criado no MYSQL
        
        $conexao = mysqli_connect($host, $usuario, $senha, $dbname); // Utiliza a conexao com banco de dados

        if($conexao ->connect_error){
            echo "Error".msqli_error($conexao); // se houver erro na conexão com o banco
        } else{
            echo "Conexão efetuada com sucesso"."</br>";
        };

        
 



    ?>