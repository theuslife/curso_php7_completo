<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:1;

//Tratando o ataque hacker. strllen conta o número de strings
if(!is_numeric($id) || strllen($id) > 5) 
{
    exit("Pegamos você!");
}

$conexao = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exe = mysqli_query($conexao, $sql);

while ($resultado = mysqli_fetch_object($exe))
{
    echo $resultado->deslogin . "<hr>";    
}

?>

<form method="GET">
    <input type="text" name="id"></input>
    <input type="submit" name="enviar">Enviar</input>
</form>
