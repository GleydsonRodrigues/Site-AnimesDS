<?php

$conecta = new mysqli("localhost","root","","animes_ds", "3306");

if(mysqli_connect_errno()){
    echo "falha ao conectar";
}else{
    // echo "deu certo";
}

?>