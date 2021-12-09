<?php

/*

Leia dois valores inteiros. 
A seguir, calcule o produto entre estes dois valores e a
tribua esta operação à variável PROD. 
A seguir mostre a variável PROD com mensagem correspondente.   

*/ 

# resolução:

$a = fgets(STDIN);
$b = fgets(STDIN);

$prod = $a * $b;

echo "PROD = $prod\n";
?>