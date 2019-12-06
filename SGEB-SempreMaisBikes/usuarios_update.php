<!-- Comando de banco de dados com a função de atualizar um orçamento já cadastrado -->	
<?php
	require 'banco.php';
	
	if ( !empty($_GET['id']))
            {
		$id = $_REQUEST['id'];
            }

	if ( null==$id )
            {
		header("Location: index.php");
            }

	if ( !empty($_POST))
            {
		
		

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
		$tipo = $_POST['tipo'];

		// update data
	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE usuarios set usuario = ?, senha = ?, tipo = ?, WHERE cod_usuario=".$id;
		$q = $pdo->prepare($sql);
		$q->execute(array($cliente,$telefone,$celular,$nome_pecas,$qtd_pecas,$preco_pecas,$data_orcamento));
		Banco::desconectar();
		header("Location: orcamentos.php");
		
		}
?>

<?php include('inc/header_painelAdm.php'); ?>	
      
		<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 class="well"> Adicionar Orçamento </h4>
				</div>
				<div class="card-body">
					<form class="form-row" action="usuarios.php" method="post">

						<div class="form-group col-md-4">
							<label class="control-label">Nome do usuario:</label>
							<div class="controls">
								<input class="form-control" name="usuario" type="tel" placeholder="Usuario" required="" value="">
							</div>
						</div>

						<div class="form-group col-md-4">
							<label class="control-label">Senha do usuario</label>
							<div class="controls">
								<input class="form-control" name="senha" type="tel" placeholder="Senha" required="" value="">
							</div>
						</div>
						
						<div class="form-group col-md-4">
							<label class="control-label">Tipo de usuario</label>
							<div class="controls">
								<input class="form-control" name="tipo" type="tel" placeholder="ADM" required="" value="">
							</div>
						</div>					

						<div class="form-actions">
							<br/>

							<button type="submit" class="btn btn-success">Atualizar</button>

						</div>
					</form>
				</div>
			</div>
        </div>
	</div>
<?php include('inc/footer.php'); ?>
