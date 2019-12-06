<!-- Comando de banco de dados com a função de atualizar um orçamento já cadastrado -->	

<?php
	require 'banco.php';
	

	
	if ( !empty($_GET['id']))
            {
		$id = $_REQUEST['id'];
            }
			
	
	
	//Select da Tabela Modelo
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT nome, preco FROM tb_modelo where cod_modelo = $id";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$nome = $resuPecas['nome'];
	$preco = $resuPecas['preco'];

?>

<?php include('inc/header.php'); ?>
      
		<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 class="well"> Atualizar Quantidade </h4>
				</div>
				<div class="card-body">
					<form class="form-row" name="upadate" action="inc/modelos_update.php" method="post">
					
						<div class="form-group col-md-9">
						<label class="control-label">Modelo</label>
						<div class="controls"> 
							<input size="50" class="form-control" name="nome" value="<?php echo $nome ?>" type="text" placeholder="Digite o Modelo" required="" value="">
						</div>
					</div>					
					<div class="form-group col-md-3">
						<label class="control-label">Preco</label>
						<div class="controls">
							<input size="50" class="form-control" name="preco" value="<?php echo $preco ?>" type="text" placeholder="Digite o Valor" required="" value="">
						</div>
					</div>
					<div class="form-actions">
							<br/>
							<button type="submit" class="btn btn-success" action="inc/modelos_update.php" method="post">Atualizar</button> &nbsp&nbsp&nbsp					

					</div>
					</form>
					
					
					<div class="form-actions">
							<br/>					
							<a href="modelos.php" type="btn" class="btn btn-warning">Voltar</a>

					</div>
					
					

				</div>
			</div>
        </div>
	</div>
	
<?php include('inc/footer.php') ?>
<?php 
	$_SESSION['cod_modelo'] = $id;

?>
