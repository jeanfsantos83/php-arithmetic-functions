<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas em PHP</title>
</head>
<body>
    <h1>Funções Aritméticas</h1>
    <!--
        Funções Aritméticas:
        -> abs() => retorna o valor absoluto de um dado
        -> base_convert() => converter para decimal, hexadecimal, binário, octal
        -> ceil() => arredonda o resultado para cima
        -> floor() => arredonda o resultado para baixo
        -> round() => arrendodamento aritmético
        -> hypot() => calcula a hipotenusa com base em dois catetos
        -> intdiv() => calcula o resultado da divisão inteira
        -> min() => mostra o valor mínimo de uma sequência
        -> max() => mostra o valor máximo de uma sequência
        -> pi() => para obter o valor de Py
        -> pow() => para fazer a exponenciação
        -> sin() => calcula o seno
        -> cos() => calcula o cosseno
        -> tan() => calcula a tangente
        -> sqrt() => calcula a raiz quadrada
     -->

    <?php 
        $r = abs(500);
        $r = abs(-2000);

        $r = base_convert(254, 10, 8);
        $r = base_convert(254, 10, 16);
        $r = base_convert(254, 10, 2);
        $r = base_convert(1011, 2, 16);

        $r = intdiv(5, 2);

        $r = min(5, 2);
        $r = max(5, 2);
        $r = max(5, 2, 7, 5, 1, 9, 7, 6);
        $r = min(5, 2, 7, 5, 1, 9, 7, 6);

        $r = pi();
        $r = M_PI;

        $r = pow(7, 2);
        
        $r = sqrt(81);
        $r = 27 ** (1/3);

        print "O resultado é $r";
    ?>
</body>
</html>