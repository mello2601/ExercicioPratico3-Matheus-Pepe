<?php include 'conexao.php'; ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM contatos WHERE id=$id";
$conn->query($sql);
header('Location: index.php');
?>