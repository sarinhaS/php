<!-- trabalho de: Sara e Julia -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="gravado.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="mensagem">Mensagem: </label><br><br>
        <textarea name="mensagem" id="mensagem"></textarea>
        <input type="submit" class="input">
    </form>
    <h1>RECADOS</h1>
    <?php
        $recados = unserialize(file_get_contents('recados.txt'));
        foreach ($recados as $indice=>$rec) {
            echo '<div class="div" style="1px solid black">';
            echo '<p>'.$rec['data'].'</p>';
            echo '<p>'.$rec['nome'].'</p>';
            echo '<p>'.nl2br($rec['nome']).'</p>';
            echo '<a href="apagar.php?id='.$indice.'"> Apagar </a>';
            echo '</div>';
        };

    ?>
</body>
</html>
