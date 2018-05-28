
<!- Um formulário normalmente envia string, com o parâmetro
enctype estamos informando para que seja recebido dados do 
formulário e retorne em binários. E assim podemos trabalhar
com algumas funcionalidades com o PHP 7>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload"><br><br>
    <button type="submit">Send</button>
</form>

<?php

/* Upload de arquivos funciona da seguinte forma: Quando enviado um arquivo, 
o mesmo ficará em uma pasta temporária o servidor. Se for um vídeo ou um arquivo 
muito grande, ele vai fazendo este upload, jogando pedaços e pedaços para a pasta 
temporária até completar tudo. Depois disto ele joga em uma outra pasta física real, 
conforme o nosso código manda ser executado e manipulado. */


if($_SERVER["REQUEST_METHOD"] === "POST")
{
    //Variável superglobal para pegar uploads
    $file = $_FILES["fileUpload"];

    //Tratamento de erro
    if($file["error"])
    {
        throw new Exception("Error: " . $file["error"]);
    }

    //Mandando o upload para a pasta física
    $dirUploads = "uploads";
    if(!is_dir($dirUploads))
    {
        mkdir($dirUploads);
    }

    /*Primeiro parâmetro é onde está o seu 
    arquivo temporário no servidor.
    Segundo é o diretório que você quer enviar o 
    arquivo. Esta função move_uploaded_file retorna true
    ou false, portanto podemos trata-la*/
    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]))
    {   
        echo "Upload realizado com sucesso!";
    } else 
    {
        throw new Exception("Não foi possível realizar o upload");
    }
}

?>






