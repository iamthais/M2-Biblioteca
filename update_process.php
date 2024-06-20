<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];           // Obtém o valor do campo ID
    $sobrenome = $_POST["sobrenome"];       // Obtém o valor do campo nome
    $email = $_POST["email"]; // Obtém o valor do campo sobrenome
    $telefone = $_POST["telefone"];   // Obtém o valor do campo telefone
    $endereco = $_POST["endereco"]; 
    $senha = $_POST["senha"]; 

    // Atualiza os dados na tabela pessoas
    $sql = "UPDATE usuarios SET id='$id', nome='$nome', sobrenome='$sobrenome', email='$email', telefone='$telefone', endereco='$endereco', senha='$senha' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
?>