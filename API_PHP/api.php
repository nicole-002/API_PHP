<?php

    header("Content-Type: application/json"); //define o tipo de resposta
    $metodo = $_SERVER['REQUEST_METHOD'];

    $arquivo = 'usuarios.json'; //apenas guarda o nome do arquivo

    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPE_UNICODE));//pretty deixará o cod organizado, sem ser tuo em uma linha só e unescape permite caracteres com "ç"
    }

    $usuarios = json_decode(file_get_contents($arquivo),true);

/*     $usuarios = [
        ["id" => 1, "nome" => "Nicole", "email" => "nih@gmail.com"],
        ["id" => 2, "nome" => "Thaís", "email" => "thatha@gmail.com"],
    ]; */

    //echo "Metodo de requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            //echo "ações de get";
            echo json_encode($usuarios); //vai 
            break;
        
        case 'POST':
            //echo "ações de post";
            $dados = json_decode(file_get_contents('php://input'),true); //lê os dados do corpo
            //print_r($dados);
            $novo_usuario = [
                "id" => $dados['id'],
                "nome" => $dados['nome'],
                "email" => $dados['email'],
            ];

            array_push($usuarios, $novo_usuario);//irá inserir o vetor de fato
            echo json_encode('usuário inserido com sucesso!');
            print_r($usuarios);

            break;
        default:
            echo "metodo não encontrado";
            break;
    }




?>  