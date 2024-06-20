<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $anoDePublicacao = $_POST["anoDePublicacao"];
    $editora = $_POST["editora"];

    // inserindo na tabela
    $sql = "INSERT INTO livros (titulo, autor, genero, anoDePublicacao, editora) VALUES ('$titulo', '$autor','$genero','$anoDePublicacao','$editora')";

    if($conn->query($sql) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
?>