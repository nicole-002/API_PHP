<?php

    header("Content-Type: application/json");
    $metodo = $_SERVER['REQUEST_METHOD'];

    //echo "Metodo de requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            echo "ações de get";
            break;
        
        case 'POST':
            echo "ações de post";
            break;
        default:
            echo "mtd não encontrado";
            break;
    }


    /* $usuarios = [
        ["id" => 1, "nome" => "nihh", "email" => "nih@gmail.com"],
        ["id" => 2, "nome" => "thaíss", "email" => "thatha@gmail.com"],
    ];

    echo json_encode($usuarios);
 */
?>  