<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com número aleatório</h1>
        <?php 
            $min =  0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo " <p> Gerando um númeor aleatório entre $min e $max... <br> O valor ferado foi <strong>$num</strong></p>";
        ?>
        <button onclick="javacript:document.location.reload()">Gerador de Código</button>
    </main>
</body>
</html>