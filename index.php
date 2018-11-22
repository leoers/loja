<?php include("cabecalho.php");
include("logica-usuario.php");

?>



<!--<?php if(isset($_GET["logout"]) && $_GET["logout"]==true){?>
	<p class="alert-success">Deslogado com sucesso</p>
<?php }?>
<?php if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php 
	unset($_SESSION["success"]);
}?>

<?php if(isset($_SESSION["danger"])){?>
	<p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php 
	unset($_SESSION["danger"]);
}?>-->

		<h1>Bem vindo!</h1>
		<?php if(usuarioEstaLogado()) {?>
			<p class="text-success">Usuario <?=usuarioLogado()?> logado <a href="logout.php">Logout</a></p>
		<?php }else {?>
		<h2>Login</h2>
		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>Login</td>
					<td><input class="form-control" type="email" name="email" /></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha" /></td>
				</tr>
				<tr>
					<td><button class="btn btn-primary">Login</button></td>
				</tr>
			</table>
		</form>
		<?php }?>
<?php include("rodape.php");?>