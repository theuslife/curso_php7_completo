<?php 
//Catch recebe uma classe
/*
try 
{
    //Estouramos um erro proposital com throw new Exception
    throw new Exception("Houve um erro", 1);

} catch (Exception $erro) //Tratamos o erro no bloco do catch
{
    //Devolvendo em json
    echo json_encode(array(
        "mensagem"=>$erro->getMessage(),
        "linha"=>$erro->getLine(),
        "file"=>$erro->getFile(),
        "código"=>$erro->getCode()
    ));
} */

function trataNome($nome)
{
    if(!$nome)
    {
        throw new Exception("Nenhum nome foi informado", 1);
    }
    echo ucfirst($nome) . "<br>";

    try //Tente
    {
        trataNome("João");
        trataNome("");
    } 
    catch(Exception $erro) //Pegue o erro e trate ele
    {
        echo $erro->getMessage();
    } 
    finally //Serve para você colocar outros comandos no percurso do try e catch
    {
        echo "<br>Executou o bloco Try!";
    }
}

?>