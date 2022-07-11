<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bddecria';

    $conecta = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conecta->connect_errno)

    {
            echo "Erro";
    }

        else
        {
            echo "Conexão bem sucedida";
        }

?>