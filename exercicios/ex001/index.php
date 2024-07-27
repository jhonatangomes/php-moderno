<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
    <style>
        body{
            text-align: center;
            
        }
    </style>
</head>
<body>
    <h1>PHP</h1>
    <?php
        $nome = "Jhonatan"; //string são representado entre aspas

        $sobrenome = "Gomes"; //strin:g: são representado entre aspas
        
        $idade = 26; // int ou integer: que vem sem a parte dessa decimal inteiro
        
        $peso = 60.3; // float double: valores numericos decimal com virgula
        $casado = true; //bool ou boolean: verdadeiro ou false

        const país = "Brasil"; 
        echo " O meu nome é $nome $sobrenome! \n Sou do " . país ;


        //date_default_timezone_set("America/São_Paulo");
        
        echo " hoje é dia " . date ("d/M/Y");
        echo " e a hora atual é " . date("G:i:s T");
    ?> 

    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal
        $num = 0x1A;
        echo "O valor da variavel é $num";
        //$v = 45.2;
        //var_dump($v);
    ?>
    <h2>Constante</h2>
    <?php 
        const canal = "Curso em vídeo \u{1F499}";
        echo "Eu adoro o " .canal
    ?>
    <h2>Sintaxe heredoc</h2>
    <?php 
        $curso = "PHP";
        $ano = date('Y');
        echo <<<FRASE
            Estou  estudando
                $curso em $ano
                \u{1F596}
        FRASE;
    ?>

    <h1>Ordem de Precedência</h1>
     <?php 
        $res = 50 / 2 + 3 ** 2;
        echo "O Resultado é $res";

        $res = 50 / (2 + 3) ** 2;
        echo " O Resultado é $res";
    ?>
    <h1>outros Operações Aritméticas</h1>
    <h2>abs</h2>
    <?php 
        $r = abs(-200);
        echo " a respopsta é $r";
    ?>
    
    <h2>base-convert</h2>
    <?php 
        $r = base_convert(254, 10, 8); //converter números
        echo " a respopsta é $r";
    ?>

<h2>intdiv</h2>
    <?php 
        $r = 5 / 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 5 % 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = intdiv(5, 2);
        print ("<strong>a respopsta é $r</strong>");
    ?>
    <h2>min</h2>
    <?php 
        $r = min(5, 2); // valor minimo
        print (" a respopsta é $r");
    ?>
    <h2>valor de pi</h2>
    <?php 
        $r = pi();
        print (" a respopsta é $r");
    ?>
    <h2>Calculando Raiz quadrada</h2>
    <?php 
        $r = sqrt(81);
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 81 **(1/2);
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 27 **(1/3);
        print (" a respopsta é $r");
    ?>
    <?php 
        $r = "2" + "2";
        echo (" a respopsta é $r");
    ?>
    <h1>Expressões Aritméticas</h1>
    <hr>
    <?php 
        $r = 5 + 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 5 - 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 5 * 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 5 / 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 5 % 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 5 ** 2;
        print (" a respopsta é $r");
    ?>
    <hr>
    <?php 
        $r = 50 / 2 + 3 ** 2;
        print (" a respopsta é $r");
    ?>



</body>
</html>