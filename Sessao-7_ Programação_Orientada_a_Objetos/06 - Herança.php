<?php

/*
    Classe documento na qual contém os números. Com ela geramos duas classes 
    filhas a CPF e a CNPJ com suas respectivas validações e retorno de true ou false.
*/

class Documento 
{
    private $numero;
    //Setters e Getters
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}

class CPF extends Documento 
{
    public function validar():bool 
    {
        $cpf = $this->getNumero();
        if(empty($cpf)) 
        {
            return false;
        }
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        if (strlen($cpf) != 11) 
        {
            echo "length";
            return false;
        }
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else 
        {   
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }
}

class CNPJ extends Documento 
{
    
    public function validar_cnpj():bool
    {
        $cnpj = $this->getNumero();
        
        // Lista de CNPJs inválidos
        $invalidos = [
            '00000000000000',
            '11111111111111',
            '22222222222222',
            '33333333333333',
            '44444444444444',
            '55555555555555',
            '66666666666666',
            '77777777777777',
            '88888888888888',
            '99999999999999'
        ];

        // Verifica se o CNPJ está na lista de inválidos
        if (in_array($cnpj, $invalidos)) 
        {	
            return false;
        }
        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
        // Valida tamanho
        if (strlen($cnpj) != 14)
            return false;
        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
        {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
            return false;
        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
        {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
    }
}

$matheus = new CPF();
$matheus->setNumero("47653679838");
var_dump($matheus->validar());
echo "<hr>";
$matheus = new CNPJ();
$matheus->setNumero("16131543000188");
var_dump($matheus->validar_cnpj());



