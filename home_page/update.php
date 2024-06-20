<?php
include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM livros WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atualizar livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Atualizar livro</h2>
    <!-- Formulário para atualizar a pessoa -->
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <!-- Campo oculto com o ID -->
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $row['titulo']; ?>"required>  <!-- Campo para o nome -->
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" class="form-control" id="autor" value="<?php echo $row['autor']; ?>"required>  <!-- Campo para o sobrenome -->
        </div>
        <div class="form-group">
            <label for="genero">Genero</label>
            <input type="text" name="genero" class="form-control" id="genero" value="<?php echo $row['genero']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="anoDePublicacao">Ano de Publicacao</label>
            <input type="date" name="anoDePublicacao" class="form-control" id="anoDePublicacao" value="<?php echo $row['anoDePublicacao']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="editora">Editora</label>
            <input type="text" name="editora" class="form-control" id="editora" value="<?php echo $row['editora']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>  <!-- Botão para enviar o formulário -->
    </form>
</div>
</body>
</html>