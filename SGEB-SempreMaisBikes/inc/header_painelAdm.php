<?php
session_start();

// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="TCC 3TDSN">
  <meta name="author" content="Allef, Eliel, Fernando e José">

  <title>Estoque - Sempre Mais Bike</title>

  <!-- Carregar - Bootstrap  -->
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
  
  <!-- Carregar - CSS  -->
  <link rel="stylesheet" href="assets/css/simple-sidebar.css" >
  <link rel="stylesheet" href="assets/css/style.css" >
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!-- Via MaxCDN -->
  
  
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>  <!-- -->
	
</head>

<body>
	<!-- Menus  -->
	<div class="d-flex" id="wrapper">	
    <!-- Sidebar/icone menu-->
	<div class="bg-dark " id="sidebar-wrapper">
		<div class="sidebar-heading">
			<img src="imgs/logo.png" alt="some text" width=200 height=70> 
		</div>
		<!--Menu lateral-->
		<div class="list-group list-group-flush">
			<a href="usuarios_create.php" class="list-group-item list-group-item-action bg-dark text-white"><span class="fa fa-plus-circle"></span> Adicionar Usuario</a>
			<a href="usuarios.php" class="list-group-item list-group-item-action bg-dark text-white"><span class="icon fa fa-list-ol"></span> Exibir Usuarios</a>
			<a href="backup.php" class="list-group-item list-group-item-action bg-dark text-white"><span class="icon fa fa-download"></span> Fazer Backup</a>


		</div>
	</div>
	<!-- /#sidebar-wrapper -->

<main class="container_main"> <!--Div principal -->

    <!-- Menu superior -->
    <div id="page-content-wrapper"> <!-- Conteúdo das páginas -->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
			<button class="btn btn-light bg-white text-dark" id="menu-toggle">Menu</button>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">					
					<li class="nav-item">
						
						<a class="nav-link text-white" href="index.php">Configurações de Administrador - <?php echo $_SESSION['nome_usuario']?></a>
					</li>
					<li class="nav-item">
						<a href="index.php" class="btn btn-success" > <i class="fa fa-home"></i> </button></a>						
						<a href="login/sair.php" class="btn btn-success" > <i class="fa fa-power-off"></i> </button></a>
					</li>
				</ul>
			</div>
		</nav>
	<!-- / (/div) Fecha no Footer! -->
		
