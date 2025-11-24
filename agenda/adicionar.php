<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Adicionar Contato</title>
</head>
<body>
    <h1>Adicionar Contato</h1>

    <?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

        if ($conn->query($sql)) {
            echo '<p class="ok">Contato cadastrado!</p>';
        } else {
            echo '<p class="erro">Erro ao cadastrar.</p>';
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <button type="submit" class="btn">Salvar</button>
    </form>
</body>
</html>