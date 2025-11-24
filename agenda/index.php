<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Agenda de Contatos</title>
</head>
<body>
    <h1>Agenda de Contatos</h1>

    <a class="btn" href="adicionar.php">Adicionar Contato</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>

        <?php
        $sql = "SELECT * FROM contatos";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['telefone'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                    <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Excluir contato?');">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>