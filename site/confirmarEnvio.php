<?php
    session_start();
    include_once "classes/conecta.php";

    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
        $sinopse = $_SESSION['sinopse'];
        $imagem = $_SESSION['imagem'];
    }else{
        header("Location: index.php");
    }
    if(isset($_POST['confirmar'])){
        $sql = "INSERT INTO tbl_animes (nome, sinopse, imagem) values ('$name','$sinopse','$imagem')";
        
        if($conecta->query($sql)){
            header("Location: cadastroAnimes.php");
        }else{
            echo "não deu certo";
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
    <title>confirmar</title>
</head>
<body>
    <div class="container">
        <?php
        
            echo "<h1>$name</h1>
            <p>$sinopse</p>
            <img src='$imagem' class='img-demostracao'>
            ";
            
        ?>
        <form action="" method="Post">

            <br><input type="submit" value="Confirmar" name="confirmar" class="buttonCadastro">
        </form>
    </div>
    
</body>
</html>