
<form method="post">
    <input type="text" name="busca"></input>
    <input type="submit" value="Buscar"></input>
</form>

<?php 

if(isset($_POST["busca"]))
{
    //O strip_tags não irá permitir a colocação de tags.
    //Podemos permitir algumas através dos parâmetros
    //Neste exemplo estou dando permissão para a tag strong
    echo strip_tags($_POST["busca"], "<strong>");

    //Htmlentities: Transforma em texto suas tags. Ou seja, strings
    //echo htmlentities($_POST["busca"]);
}

?>


