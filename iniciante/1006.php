<?php

/*

Leia 3 valores, no caso, variáveis A, B e C, que são as três 
notas de um aluno. A seguir, calcule a média do aluno, 
sabendo que a nota A tem peso 2, a nota B tem peso 3 e a 
nota C tem peso 5. Considere que cada nota pode ir de 0 até 10.0, 
sempre com uma casa decimal.

*/

# resolução:

    $nota1 = fgets(STDIN) * 2;
    $nota2 = fgets(STDIN) * 3;
    $nota3 = fgets(STDIN) * 5;
    
    $media = number_format(($nota1 + $nota2 + $nota3) / 10, 1, '.', '');
    
    echo "MEDIA = $media\n";
?>