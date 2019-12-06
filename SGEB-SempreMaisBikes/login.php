<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="TCC 3TDSN">
	<meta name="author" content="Allef, Eliel, Fernando e José">

	<title>Estoque - Sempre Mais Bike</title>

	<!-- Carregar - CSS  -->
	<link rel="stylesheet" href="assets/css/tela_login.css">
	<link rel="stylesheet" href="assets/css/style.css" >	
</head>  
<body>
	<form action="index.php" method="post">
		<div class="containerLog"> <!-- Div centralizadora  -->
			<div class="box1"> <!-- Div da logo do site-->
				<img src="imgs/logo.jpg" alt="some text" width=400 height=150>		
			</div>
			<div class="box2">	<!-- Div do formulário de login  -->
				<h1>Login</h1>
				<div class="textbox">
					<i class="fas fa-user"></i>
					<input type="text" name="usuario" required>
				</div>
				<div class="textbox">		
					<i class="fas fa-lock"></i>
					<input type="password" name="senha" required>
				</div>
				
				<?php if ( ! empty( $_SESSION['login_erro'] ) ) :?>
						<tr>
							<td style="color: red;"><?php echo $_SESSION['login_erro'];?></td>
							<?php $_SESSION['login_erro'] = ''; ?>
						</tr>
					<?php endif; ?>
				<input type="submit" class="btn" value="Entrar">
			</div>
		</div>
	</form>
</body>
</html>
