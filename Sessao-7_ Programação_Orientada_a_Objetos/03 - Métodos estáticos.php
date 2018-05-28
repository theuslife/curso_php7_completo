<?php

//Use o static para casos onde o método não precisa do $this. De utilizar da instância que criamos através da classe.

//Static permite que você possa acessar dados dos atributos e métodos sem a necessidade de instanciar aquela classe, ou seja, criar um objeto

class Documento {
    private $numero;


    public static function validarCPF($cpf):bool {
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
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
    
         } else {   
             
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

    //Setter e Getter
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        /*
            Aqui estamos chamando o método validarCPF da nossa classe Documento,
            então a sintaxe são esses dois pontos após o nome da classe. Isto é chamar
            a próprio método para chamar o método e testar-lo ou usar para alguma finalidade 
            como neste caso.
        */
        $resultado = Documento::validarCPF($numero);
        if($resultado === false){
            throw new Exception("CPF Informado não é valido", 1);
        }
        $this->numero = $numero;

    }
}

/*
$cpf = new Documento();
$cpf->setNumero("47653679838");

var_dump($cpf->getNumero());
*/

//Podemos chamar um metódo static da nossa clase com esta sintaxe dos dois pontos no programa sem precisar instanciar uma variável nele.
var_dump(Documento::validarCPF("47653679838"));

