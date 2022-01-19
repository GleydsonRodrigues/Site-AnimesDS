<?php
include_once "classes/conecta.php";

session_start();
if(isset($_POST['txtName'])){
    $name = $_POST['txtName'];
    $sinopse = $_POST['txtSinopse'];

    $formatosPermitidos = array('jpg', 'jpeg', 'png', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF');
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)){
        $temporario = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid().".$extensao";
        $diretorioFinal = "images/".$novoNome;

        if(move_uploaded_file($temporario, $diretorioFinal)){
            $_SESSION['name'] = $name;
            $_SESSION['sinopse'] = $sinopse;
            $_SESSION['imagem'] = $diretorioFinal;
            header('Location: confirmarEnvio.php');
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Cadastro de animes</title>
</head>
<body>
    <div class="container">

        <h1>Cadastrar animes</h1>

        <form class="fomulario-animes" method="post" enctype="multipart/form-data">
            <div>
                <label for="txtName">Insira o nome do anime</label><br>
                <input type="text" name="txtName" id="" class="form-elements">
            </div>
            <div>
                <label for="txtSinopse">Insira a Sinopse</label><br>
                <textarea name="txtSinopse" id="" cols="30" rows="10" class="form-elements"></textarea>
            </div>
            <div>
                <label for="imagem">Insira a imagem</label><br>
                <input type="file" name="imagem" id="">
            </div>
            <div><br>
                <input type="submit" value="Enviar" class="buttonCadastro">
            </div>
        </form>
    </div>
</body>
</html>