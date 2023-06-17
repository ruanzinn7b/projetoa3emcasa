<?php
$conexao = mysqli_connect('localhost', 'root','','projetodemetrius','3306');
if(!$conexao){
    die("erro de conexao");
}else{
    echo"conectado";
}
?>


