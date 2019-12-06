<?php include('inc/header.php'); ?>
		
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Adicionar Peças </h4> <!-- Topo do formulário de cadastro de peças -->	
				</div>
				<div class="card-body">
					<form class="form-row" name="pecas" action="inc/pecas_create.php" method="post">
						<!-- PFormulário de cadastro de peças -->	
						<div class="form-group col-md-12">
							<label class="control-label">Nome</label>
							<div class="controls">
								<input size="50" class="form-control" name="Pnome" type="text" placeholder="Nome da Peça" required="">

							</div>
						</div>
					
						<div class="form-group col-md-4">
							<label class="control-label">Quantidade</label>
							<div class="controls">
								<input size="50" class="form-control" name="Pquantidade" type="number" placeholder="Quantidade" required="">
							</div>
						</div>
						
						<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_modelo, nome, preco FROM tb_modelo");
							?>
							
							<div class="form-group col-md-8">	
								<label for="">Selecione um produto</label>
								<select name="cbModelo" class="form-control">						 
								<option name="cbModelo" value=null></option>									
								<?php while($categoria = mysqli_fetch_array($query)) {  ?>							 
								<option name="modelo" value="<?php echo $categoria['cod_modelo'];;?>"><?php echo $categoria['nome'];?><?php echo ' R$: '. $categoria['preco'];?><?php echo '&nbsp&nbsp'?>
								<?php } ?>		
								</select>
							</div><br>
							
						
							
							
		

						<div class="form-actions">
							<br/>

							<button type="submit" class="btn btn-success" action="inc/pecas_create.php">Adicionar</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	

<?php include('inc/footer.php'); ?>
