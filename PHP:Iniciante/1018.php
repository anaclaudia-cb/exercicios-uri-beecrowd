<?php

/*

Leia um valor inteiro. A seguir, calcule o menor número de notas possíveis (cédulas) 
no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2 e 1. 
A seguir mostre o valor lido e a relação de notas necessárias.

*/

# resolução:

$note_list = array(100, 50, 20, 10, 5, 2, 1);

$money = readline();

echo $money . "\n";

for ($i = 0; $i < 7; $i++) {
    $count =  $money / $note_list[$i];
    
    echo (int) $count . " nota(s) de R$ " . $note_list[$i] . ",00\n";
    
    $money %= $note_list[$i];
}
?>