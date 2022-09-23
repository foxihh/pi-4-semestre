<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'Tenho8@viao';
    $dbName = 'teste_pi_formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


    /*
    //Testando conexão
    if($conexao -> connect_errno){
        echo "Erro!";
    }
    else{
        echo "Conexão efetuada com sucesso!";
    }
    */


?>