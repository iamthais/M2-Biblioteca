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
    <title>Atualizar Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Atualizar Pessoa</h2>
    <!-- Formulário para atualizar a pessoa -->
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <!-- Campo oculto com o ID -->
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $row['nome']; ?>"required>  <!-- Campo para o nome -->
        </div>
        <div class="form-group">
            <label for="sobrenome">sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" id="sobrenome" value="<?php echo $row['sobrenome']; ?>"required>  <!-- Campo para o sobrenome -->
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="telefone">telefone</label>
            <input type="date" name="telefone" class="form-control" id="telefone" value="<?php echo $row['telefone']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="endereco">endereco</label>
            <input type="text" name="endereco" class="form-control" id="endereco" value="<?php echo $row['endereco']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <div class="form-group">
            <label for="senha">senha</label>
            <input type="text" name="senha" class="form-control" id="senha" value="<?php echo $row['senha']; ?>"required>  <!-- Campo para o telefone -->
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>  <!-- Botão para enviar o formulário -->
    </form>
</div>
</body>
</html>