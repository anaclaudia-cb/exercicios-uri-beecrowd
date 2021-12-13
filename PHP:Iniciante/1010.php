<?php

/*

Neste problema, deve-se ler o código de uma peça 1, 
o número de peças 1, o valor unitário de cada peça 1, 
o código de uma peça 2, o número de peças 2 e o 
valor unitário de cada peça 2. 
Após, calcule e mostre o valor a ser pago.

*/

#resolução:

$p1 = explode(" ", fgets(STDIN));
$p2 = explode(" ", fgets(STDIN));

$valueToPay = number_format(($p1[1] * $p1[2]) + ($p2[1] * $p2[2]), 2, '.', '');

echo "VALOR A PAGAR: R$ $valueToPay\n";
?>