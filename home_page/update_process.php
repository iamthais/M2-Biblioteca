<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];           // Obtém o valor do campo ID
    $titulo = $_POST["titulo"];       // Obtém o valor do campo nome
    $autor = $_POST["autor"]; // Obtém o valor do campo sobrenome
    $genero = $_POST["genero"];   // Obtém o valor do campo telefone
    $anoDePublicacao = $_POST["anoDePublicacao"]; 
    $editora = $_POST["editora"]; 

    // Atualiza os dados na tabela pessoas
    $sql = "UPDATE livros SET id='$id', titulo='$titulo', autor='$autor', genero='$genero', anoDePublicacao='$anoDePublicacao', editora='$editora' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
?>