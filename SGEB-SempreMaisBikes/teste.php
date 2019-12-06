<!-- Comando de banco de dados para exclusão de um orçamento  -->	
<?php
require 'banco.php';

$id = 6;
$cliente = null;



if(!empty($_POST))
{
	if($Produto[0] != "nulo")
	{
		//Alterar banco:	
		$p1_quantidade = 50;
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas SET quantidade = quantidade-(?) WHERE cod_pecas =".$id;
		//UPDATE `tb_pecas` SET `quantidade`= quantidade-1 WHERE cod_pecas = 1
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
}


?>

<?php include('inc/header.php'); ?>
	<div class="container">
		<div class="span10 offset1"><br>
			<div class="card ">
				<div class="card-header">
					<h4 class="well"> &nbsp Finalizar Orçamento: <?php echo "$id"?> - <?php echo "$cliente"?></h4>
				</div>
				<div class="card-body">				
					<div class="span10 offset1">
						<form class="form-horizontal" action="orcamentos_delete.php" method="post">
							<input type="hidden" name="id" value="<?php echo $id;?>" />
							<div class="alert alert-danger container_center">Deseja finalizar e remover as quantidades de peças usadas no Estoque? <br>
							</div>
							<div class="form actions container_center">
								<button type="submit" class="btn btn-danger">Sim</button>
								<a href="orcamentos.php" type="btn" class="btn btn-default">Não</a>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>		
<?php include('inc/footer.php'); ?>