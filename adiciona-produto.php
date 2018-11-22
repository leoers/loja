<?php include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");
include("logica-usuario.php");

verificaUsuario();

	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	if(array_key_exists('usado', $_POST)){
		$usado = 'true';
	} else{
		$usado = 'false';
	}

if(insereproduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
	<p class="text-success">Produto <?= $nome ?> adicionado com sucesso e tem o preço de <?= $preco ?></p>
<?php }
	else{ 
		$msg = mysqli_error($conexao);
		?><p class="text-danger">Produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php 
}
?>
	
<?php include("rodape.php");?>
