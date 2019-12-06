<?php include('inc/header_painelAdm.php'); ?>	
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 class="well"> Adicionar Usuários</h4>
				</div>
				<div class="card-body">
					<form class="form-row" action="usuarios_create.php" method="post">
						<div class="form-group col-md-4">
							<label class="control-label">Nome do usuário:</label>
							<div class="controls">
								<input class="form-control" name="nome_user" type="tel" placeholder="Informe o Nome do Usuario" required="" value="">
							</div>
						</div>						
						<div class="form-group col-md-4">
							<label class="control-label">Usuário:</label>
							<div class="controls">
								<input class="form-control" name="usuario" type="tel" placeholder="Informe o Usuario" required="" value="">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label class="control-label">Senha:</label>
							<div class="controls">
								<input class="form-control" name="senha" type="tel" placeholder="Informe a Senha" required="" value="">
							</div>
						</div>	
						<div class="form-actions">
							<br/>
							<button type="submit" class="btn btn-success">Adicionar</button>
						</div>
					</form>
				</div>
			</div>
        </div>
	</div>
		
<?php include('inc/footer.php'); ?>
					

<?php
    require 'banco.php';

    if(!empty($_POST))
    {
		$id = 'cod_usuario';
		
        //Acompanha os erros de validação
        $usuario = null;
        $senha = null;

        $nome_user = $_POST['nome_user'];
        $usuario = $_POST['usuario'];
        $senha = crypt ($_POST['senha']);
		

		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO tb_login (user, user_name, user_password) VALUES(?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($usuario,$nome_user,$senha));
		Banco::desconectar();
		



    }
?>

    
<?php include('inc/footer.php'); ?>