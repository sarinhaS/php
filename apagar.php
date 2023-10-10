<?php

    $id = $_GET['id'];

    if(file_exists('recados.txt')){
        $arq_recados = file_get_contents('recados.txt');
        $recados = unserialize($arq_recados);
    }

    unset($recados[$id]);
    
    file_put_contents('recados.txt', serialize($recados));

    header('location: index.php');