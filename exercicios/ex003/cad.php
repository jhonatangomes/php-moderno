<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
        
    </header>
    <nav>
        <div classe="navigation">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Notícias</a></li>
            <li><a href="#">Curiosidades</a></li>
            <li><a href="#">Fale Conosco</a></li>
        </ul>
        <div>
    </nav>

    <main>
        <?php 
            //var_dump($_GET); $_GET, $_POST,$_COOKIES, $_REQUEST
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];
            echo "<p> Muito obrigado por acessar nosso site Senhor <P><strong>$n $s.</strong></P> Prazer!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>