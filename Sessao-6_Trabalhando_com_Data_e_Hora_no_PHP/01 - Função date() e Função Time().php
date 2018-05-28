<?php

//Usar fuso-horário em seu site não é tão simples, por isso teremos essa sessão de datas.
//A função é caseSensitive, ou seja, ela vária se caso a letra for maíuscula ou não

/*
    Na documentação do PHP temos o date() representado da seguinte forma: string date ( string $format [, int $timestamp ] ). 
    Os colchetes define que essa função possue valores padrões, que podemos informar se quizermos.
*/


//Pelo menos um parâmetro é necessário. Com a Date() você pode pegar o dia, mês ou o ano. 
echo date("d/m/y");
echo "<hr>";
echo date("D/M/Y");

//Pode exibir o horário do servidor
echo "<hr>";
echo date("h:i:s");

//Modificando timestamp para descobrirmos que dia da semana era em uma data antiga.

//Essa função retorna o timestamp de determinada data
$ts = strtotime("2001-09-11");

echo "<hr>";
//A letra L no parâmetro de strings retorna o dia da semana, logo sabemos que no dia 9/11/2001 era uma terça-feira
echo date("l, d/m/Y", $ts);

/*
    Mais um exemplo. Essa função strtotime é bem útil, então conseguimos pegar muitos horários com ela, 
    portanto é uma boa dar uma vasculhada nela na documentação do PHP 7
*/
echo "<hr>";
$ts = strtotime("now");
echo date("l, d/m/Y", $ts);





