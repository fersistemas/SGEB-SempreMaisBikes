<!-- Comando de banco de dados para exclusão de um orçamento  -->	
<?php

require 'banco.php';

$id = null;
$cliente = null;

$id = $_SESSION['cod_orcamento'];


//Pegando os IDs das Peças selecionadas no Orçamento
$pdo = Banco::conectar();
$sql = 'SELECT resumo_orcamento FROM tb_orcamento WHERE cod_orcamento =' . $id;
$consulta = $pdo->query($sql);
while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) 
{
	//echo "Nome: {$linha['resumo_orcamentos']} - Usuário: {$linha['resumo_orcamentos']}<br />";
	if ($linha['resumo_orcamento'] == null){
		$array = null;
	}else {
		$array = $linha['resumo_orcamento'];
	}
}
$Produto = (explode('-',$array));


if(!empty($_POST))
{
	$p1_quantidade = 1;
	if($Produto[0] != "nulo")
	{
		//Alterar banco:	
		$p1_quantidade = 1;
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[0];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}	
	
	if($Produto[1] != "nulo")
	{
		//Alterar banco:
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[1];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[2] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[2];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[3] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[3];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[4] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[4];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[5] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[5];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[6] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[6];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[7] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[7];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[8] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[8];
		$q = $pdo->prepare($sql);
		$q->execute(array($p1_quantidade));
		Banco::desconectar();
		header("Location: orcamentos.php");
	}
	
	if($Produto[9] != "nulo")
	{
		//Alterar banco:	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = quantidade-(?) WHERE cod_pecas =" . $Produto[9];
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
						<form class="form-horizontal" action="orcamentos_finalizar.php" method="post">
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