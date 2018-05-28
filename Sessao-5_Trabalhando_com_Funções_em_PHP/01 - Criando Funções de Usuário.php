<?php

//Funções
function ola(){
   return "Olá mundo";
}
echo ola();
$frase = ola();
echo "<br><br>";
echo strlen($frase);

function salario(){
    return 946.00;
}

echo "<br><br>";
echo "José recebeu 3 salários: " . (salario() * 3);
