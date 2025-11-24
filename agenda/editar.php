<?php include 'conexao.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM contatos WHERE id=$id";
$result = $conn->query($sql);
$contato = $result->fetch_assoc();

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

    if ($conn->query($sql)) {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Contato</title>
</head>
<body>
    <h1>Editar Contato</h1>

    <form method="POST">
        <input type="text" name="nome" value="<?= $contato['nome'] ?>" required>
        <input type="email" name="email" value="<?= $contato['email'] ?>" required>
        <input type="text" name="telefone" value="<?= $contato['telefone'] ?>" required>
        <button class="btn">Salvar</button>
    </form>
</body>
</html>