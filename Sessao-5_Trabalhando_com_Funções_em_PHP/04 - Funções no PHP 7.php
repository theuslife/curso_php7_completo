<?php


/*
Essa função do PHP 7, permite que você tenha N argumentos e ainda você pode informar o tipo dela, 
permitindo assim ser somente daquele tipo. Todo o parâmetro é jogado na varíavel após os três pontos. 
Lembrando que ele cria uma coleção de arrays
*/
function soma(int ...$valores) {
    //A função array_sum mostra todos os dados do seu vetor :o;
    return array_sum($valores);
}

echo soma(2, 2, 2, 4);
echo "<br>";
echo soma(5,15);
echo "<br>";

//Você pode informar o tipo de retorno colocando dois pontos na frente da função antes das chaves e informando o tipo
function soma2(float ...$valores2):float {
    //A função array_sum mostra todos os dados do seu vetor :o;
    return array_sum($valores2);
}
echo "<pre>";
print_r(soma2(10.5, 10.5));


