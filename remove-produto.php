<?php include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");
include("logica-usuario.php");

$id = $_POST['id'];
removeproduto($conexao, $id);
$_SESSION["success"] = "Produto removido com sucesso.";
header("location: produto-lista.php");
die();
?>

