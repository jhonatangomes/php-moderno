<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <main>
        <?php
            //Cotação do Dólar
            $cotação = 5.54;
            $real = $_REQUEST["din"] ?? 0; // local onde vem o valor digitado
            $dólar = $real / $cotação; //Equivalência em dólar
           
            //Mostrando o resultado
            //echo "Seu R$" . number_format($real, 2, ",", ".") . "equvalem a US$" . number_format($dólar, 2, ",", ".");

            ///formatação de moeda com internacionalização!
            //Biblioteca intl(internalization PHP)

            $padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            echo "<p>Seu " . numfmt_format_currency($padrão, $real, "BRL") . " equvalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") ."</strong></p>";
        ?>
        <button onclick="javascript:window.history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>