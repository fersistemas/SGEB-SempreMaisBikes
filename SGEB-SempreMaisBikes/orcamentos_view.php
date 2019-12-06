<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->	
<?php
include 'banco.php';

$id = null;

if ( !empty($_GET['id']))
		{
	$id = $_REQUEST['id'];
		}
		
//echo $id;
       
$cliente = null;
$telefone = null;
$celular = null;

$produto1 = null;
$produto2 = null;
$produto3 = null;
$produto4 = null;
$produto5 = null;
$produto6 = null;
$produto7 = null;
$produto8 = null;
$produto9 = null;
$produto10 = null;

$p1_cod_pecas = null;
$p1_nome = null;
$p1_preco = null;

$p2_cod_pecas = null;
$p2_nome = null;
$p2_preco = null;

$p3_cod_pecas = null;
$p3_nome = null;
$p3_preco = null;

$p4_cod_pecas = null;
$p4_nome = null;
$p4_preco = null;

$p5_cod_pecas = null;
$p5_nome = null;
$p5_preco = null;

$p6_cod_pecas = null;
$p6_nome = null;
$p6_preco = null;

$p7_cod_pecas = null;
$p7_nome = null;
$p7_preco = null;

$p8_cod_pecas = null;
$p8_nome = null;
$p8_preco = null;

$p9_cod_pecas = null;
$p9_nome = null;
$p9_preco = null;

$p10_cod_pecas = null;
$p10_nome = null;
$p10_preco = null; 


$pdo = Banco::conectar();
$sql = 'SELECT resumo_orcamento FROM tb_orcamento WHERE cod_orcamento =' . $id;
$consulta = $pdo->query($sql);

while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) 
{
	//echo "Nome: {$linha['resumo_orcamento']} - Usuário: {$linha['resumo_orcamento']}<br />";
	if ($linha['resumo_orcamento'] == null){
		$array = null;
	}else {
		$array = $linha['resumo_orcamento'];
	}
}

$Produto = (explode('-',$array));


if($Produto[0] == "nulo"){
	
}else{ 
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[0]";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
		die("Error:".$con->error);
		mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p1_cod_pecas = $resuPecas['cod_pecas'];
	$p1_nome = $resuPecas['nome'];
	$p1_preco = $resuPecas['preco']; 

}

if($Produto[1] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[1]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p2_cod_pecas = $resuPecas['cod_pecas'];
$p2_nome = $resuPecas['nome'];
$p2_preco = $resuPecas['preco'];
}	

if($Produto[2] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[2]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p3_cod_pecas = $resuPecas['cod_pecas'];
$p3_nome = $resuPecas['nome'];
$p3_preco = $resuPecas['preco'];
}	

if($Produto[3] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[3]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p4_cod_pecas = $resuPecas['cod_pecas'];
$p4_nome = $resuPecas['nome'];
$p4_preco = $resuPecas['preco'];
}	

if($Produto[4] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[4]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p5_cod_pecas = $resuPecas['cod_pecas'];
$p5_nome = $resuPecas['nome'];
$p5_preco = $resuPecas['preco'];
}	

if($Produto[5] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[5]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p6_cod_pecas = $resuPecas['cod_pecas'];
$p6_nome = $resuPecas['nome'];
$p6_preco = $resuPecas['preco'];
}	

if($Produto[6] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[6]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p7_cod_pecas = $resuPecas['cod_pecas'];
$p7_nome = $resuPecas['nome'];
$p7_preco = $resuPecas['preco'];
}	

if($Produto[7] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[7]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p8_cod_pecas = $resuPecas['cod_pecas'];
$p8_nome = $resuPecas['nome'];
$p8_preco = $resuPecas['preco'];

}	

if($Produto[8] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[8]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p9_cod_pecas = $resuPecas['cod_pecas'];
$p9_nome = $resuPecas['nome'];
$p9_preco = $resuPecas['preco'];
}	

if($Produto[9] == "nulo"){
	
}else{
$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto[9]";
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resuPecas = mysqli_fetch_array($rs);
$p10_cod_pecas = $resuPecas['cod_pecas'];
$p10_nome = $resuPecas['nome'];
$p10_preco = $resuPecas['preco'];
}

$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
$query= "SELECT cliente, telefone, celular FROM tb_orcamento where cod_orcamento =" . $id;
$rs = mysqli_query($con,$query);
if(mysqli_query($con, $query))
{
	mysqli_close($con);
}else{
	die("Error:".$con->error);
	mysqli_close($con);
}
$resu = mysqli_fetch_array($rs);
$cliente = $resu['cliente'];
$telefone = $resu['telefone'];
$celular = $resu['celular'];



?>

<?php include('inc/header.php'); ?>
		<!-- Tabela de vizualização dos orçamentos -->	
        <div class="box_center">
		<div class="card">
			<div class="card-header">
				<h3 class="well">Informações do Orçamento: </h3>
			</div>
			<div class="card-body">			
	
					<table class="table table-bordered table-sm ">
					<colgroup span="3"></colgroup>
							<tr>
								<td width="20%"> Nome:</td>
								<td width="80%" colspan="2"><?php echo "$cliente" ?></td>
							</tr>
							<tr>
								<td width="20">Telefone:</td>
								<td width="80" colspan="2"><?php echo "$telefone" ?></td>
							</tr>
							<tr>
								<td width="20">Celular:</td>
								<td width="80" colspan="2"><?php echo "$celular" ?></td>
							</tr>											
							<?php
								if ($produto1 == 'nulo'){ }
								else{ ?>
								<tr>								
									<td>Peça: </td>
									<td width="40%"> <?php echo $p1_nome;?></td>
									<td width="40%"> R$ <?php echo number_format($p1_preco, 2, ',', '.'); ?></td>
								</tr>
							<?php } ?>
							<?php								
								if ($produto2 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p2_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p2_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php											
								if ($produto3 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p3_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p3_preco, 2, ',', '.'); ?></td>
									</tr>	
							<?php } ?>
							<?php										
								if ($produto4 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p4_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p4_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php	
								if ($produto5 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p5_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p5_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php	
								if ($produto6 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p6_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p6_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php	
								if ($produto7 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p7_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p7_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php	
								if ($produto8 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p8_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p9_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php	
								if ($produto9 == "nulo"){ }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p9_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p9_preco, 2, ',', '.'); ?></td>
									</tr>
							<?php } ?>
							<?php	
								if ($produto10 == "nulo"){	 }
								else{ ?>
									<tr>								
										<td>Peça: </td>
										<td width="40%"> <?php echo $p10_nome;?></td>
										<td width="40%"> R$ <?php echo number_format($p10_preco, 2, ',', '.'); ?></td>
									</tr>
									
							<?php }?>
							
						
					</table><br>

					<?php $somatotal = ($p1_preco + $p2_preco + $p3_preco + $p4_preco + $p5_preco + $p6_preco + $p7_preco + $p8_preco + $p9_preco + $p10_preco);
			
					?>
					Total do Orçamento: <?php echo number_format($somatotal, 2, ',', '.'); ?><br>

					



					<form class="form-row" action="orcamentos.php" method="post">
						<div class="col col-lg-2">	
							<div class="form-actions">
							<br/>
								<button type="submit" class="btn btn-success"> Voltar </button>
							</div><br>					
						</div>
					</form>


				</div>

		</div>
	</div>

	<?php include('inc/footer.php'); ?>
