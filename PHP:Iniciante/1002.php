<?php

/*Área do Círculo

A fórmula para calcular a área de uma circunferência é: area = π . raio2. 
Considerando para este problema que π = 3.14159:

- Efetue o cálculo da área, elevando o valor de raio ao quadrado e multiplicando por π.
*/

#resolução

    $raio = fgets(STDIN);
    $pi = 3.14159;
    
    $area = number_format(round(pow($raio, 2) * $pi, 4), 4, '.', '');
    
    print "A=$area\n";
?>