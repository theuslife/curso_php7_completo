<?php


/*
    Esses são os parâmetros para três casos diferentes. A forma do linux, 
    as acentuações com o utf-8 e o windows. O LC_ALL (Variáve Global) diz para 
    mudar todas as configurações para os idiomas passados no parâmetro
*/
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//Parecido com date, mas com parâmetros diferentes
echo strftime("%A/%B");









