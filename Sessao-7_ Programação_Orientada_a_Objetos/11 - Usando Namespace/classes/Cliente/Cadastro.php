<?php

//Namespace é nossa pasta raiz de nosso Cadastro.php
namespace Cliente;

//Perceba o a barra contrária antes de Cadastro, isto indica que estamos herdando de uma classe na pasta anterior onde esta aqui já se encontra
class Cadastro extends \Cadastro
{
    public function registrarVenda()
    {
        echo "Foi registrada uma venda para o cliente " . $this->getNome();
    }
}




