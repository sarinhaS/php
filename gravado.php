<?php 

    $recados = [];

    // se o arquivo existir...
    if(file_exists('recados.txt')){
        $arq_recados = file_get_contents('recados.txt');
        $recados = unserialize($arq_recados);
    }

    $recados[] = [
        'nome' => $_POST['nome'],
        'data' => date('d/m/Y H:i:s'),
        'recado' => $_POST['mensagem']
    ];

    // guarda um novo recado
    file_put_contents('recados.txt', serialize($recados));

    header('location: index.php');

   
     