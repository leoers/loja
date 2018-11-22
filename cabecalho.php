<?php
error_reporting(E_ALL ^ E_NOTICE);
 include("mostra-alerta.php"); ?>

<?php

mostraAlerta('success');
mostraAlerta('danger');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Minha Loja</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/loja.css"
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Minha loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Formulario</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
				</ul>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="principal">

