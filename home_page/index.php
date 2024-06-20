<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UNC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Cadastro de livros</a>
            </div>
            </div>
        </div>
        </nav>
    </head>
    <div class="container">
        <h2 class="mt-5">Livros</h2>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control" id="titulo" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" name="autor" class="form-control" id="autor" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero</label>
                <input type="text" name="genero" class="form-control" id="genero" required>
            </div>
            <div class="form-group">
                <label for="anoDePublicacao">Ano de publicação</label>
                <input type="date" name="anoDePublicacao" class="form-control" id="anoDePublicacao" required>
            </div>
            <div class="form-group">
                <label for="editora">Editora</label>
                <input type="text" name="editora" class="form-control" id="editora" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar livro</button>
        </form>
        <h2 class="mt-5">Livros Cadastrados </h2>
        <?php include __DIR__ . '/read.php'; ?>
    </div>
</body>
</html>