<?php
//=====================For=====================
for ($i = 0; $i <= 10; $i++){
    echo "Estamos na posição $i";
    echo "<br>";
    if($i == 4)
        continue;
}

echo "<select>";
    for($i = date("Y"); $i >= date("Y")-100; $i--){
        echo "<option value = " . $i . ">" . $i . "</option>";
    }
echo "</select>";
echo "<br><br>";

//=====================Foreach=====================

//Foreach é usado para percorrer arrays
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

//Com dois parâmetros a segunda variável será os elementos contidos no array
foreach($meses as $mes){

    echo "O mês é: " . $mes;
    echo "<br>";

}

/*
Com três elementos o primeiro é o array que iremos percorrer, o segundo a variável que irá armazenar 
as posições e o terceiro os elementos destas posições
*/
$vetor = array("Nome" => "Matheus", "Idade" => 19, "Sexo" => "Masculino");

foreach($vetor as $posicao => $elementos){
    echo "<br>";
    echo "$posicao: $elementos";
}

echo "<br>";

foreach($meses as $posicao => $mes){
    echo "<br>";
    echo $posicao+1 . " : $mes";
}

echo "<br><br>";

//=====================WHILE e DO WHILE=====================
$condicao = true;
while($condicao){
    $numero = rand(1, 50);
    if($numero === 3 || $numero == 5){
        echo ">>>>$numero<<<<<";
        $condicao = false;
    }
    echo $numero . " ";
}

echo "<br>";

$valorProduto = 100;
$desconto = 5;

if($valorProduto >= 100){
    echo $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
}




