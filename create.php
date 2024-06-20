<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["email"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, sobrenome, telefone, endereco, senha) VALUES ('$nome', '$sobrenome','$telefone', '$endereco', '$senha')";

    if($conn->query($sql) === true){
        header("Location: index.php"); 
        exit();
    }else{
        echo "Erro: " . $sql . "<br>"; 
    }
}

$conn->close();
?>