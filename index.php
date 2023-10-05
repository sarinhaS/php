<?php   
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    $data = date('d/m/Y H:i');

    echo "$data";
    echo "$nome";
    echo "$mensagem";