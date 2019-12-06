<?php include('inc/header.php'); ?>	
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Adicionar Orçamento </h4>
				</div>
				<div class="card-body"> <!-- Formulário de orçamento -->
					<form class="form-row" action="inc/orcamentos_create.php" method="post">
						<div class="form-group col-md-6">
							<label class="control-label">Cliente:</label>
							<div class="controls">
								<input type="text" id="cliente" name="cliente" class="form-control" type="text" placeholder="Informe o nome do Cliente" required="">
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label">RG:</label>
							<div class="controls">
								<input type="text" id="rg" name="rg" class="form-control" type="text" placeholder="Informe o RG" required="">
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label">Telefone:</label>
							<div class="controls">
								<input type="text" id="telefone" name="telefone" class="form-control" type="tel" placeholder="Informe o Telefone" >
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label">Celular:</label>
							<div class="controls">
								<input type="text" id="celular" name="celular" class="form-control" type="cel" placeholder="Informe o Celular">
							</div><br>
						</div>	

	

						
						<div class="div_blocoCentro"> <!-- Tabela de peças -->
						
							<!-- 01-->						
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<label for="">Selecione um produto</label> 
							<div class="col col-lg-12">	
								<select name="produto1" class="form-control">						 
								<option name="produto1" value="null"></option>									
								<?php while($prod1 = mysqli_fetch_array($query)) {  ?>							 
								<option name="produto1" value="<?php echo $prod1['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod1['nome']?>
								<?php } ?>		
								</select>
							</div><br>
							<!-- 02-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto2" class="form-control">						 
								<option name="produto2" value="null"></option>									
								<?php while($prod2 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto2" value="<?php echo $prod2['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod2['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 03-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto3" class="form-control">						 
								<option name="produto3" value="null"></option>									
								<?php while($prod3 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto3" value="<?php echo $prod3['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod3['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 04-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto4" class="form-control">						 
								<option name="produto4" value="null"></option>									
								<?php while($prod4 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto4" value="<?php echo $prod4['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod4['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 05-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto5" class="form-control">						 
								<option name="produto5" value="null"></option>									
								<?php while($prod5 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto5" value="<?php echo $prod5['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod5['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 06-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto6" class="form-control">						 
								<option name="produto6" value="null"></option>									
								<?php while($prod6 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto6" value="<?php echo $prod6['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod6['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 07-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto7" class="form-control">						 
								<option name="produto7" value="null"></option>									
								<?php while($prod7 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto7" value="<?php echo $prod7['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod7['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 08-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto8" class="form-control">						 
								<option name="produto8" value="null"></option>									
								<?php while($prod8 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto8" value="<?php echo $prod8['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod8['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 09-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto9" class="form-control">						 
								<option name="produto9" value="null"></option>									
								<?php while($prod9 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto9" value="<?php echo $prod9['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod9['nome']?>
								<?php } ?>	
								</select>
							</div><br>
							<!-- 10-->							
							<?php
							$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($con,"SELECT cod_pecas, nome, preco FROM tb_pecas");
							?>
							<div class="col col-lg-12">	
								<select name="produto10" class="form-control">						 
								<option name="produto10" value="null"></option>									
								<?php while($prod10 = mysqli_fetch_array($query)) { ?>							 
								<option name="produto10" value="<?php echo $prod10['cod_pecas'];?>"><?php echo '&nbsp&nbsp' . $prod10['nome']?>
								<?php } ?>	
								</select>
							</div><br>			
							
							
							<div class="col col-lg-2">	
								<div class="form-actions">
								<br/>
									<button type="submit" class="btn btn-success" action="inc/orcamentos_create.php"> Próximo </button>
								</div><br>
							</div>						
						</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
	$('#telefone').mask('(00) 0000-0000');
	$('#telefone').blur(function(event) {
	if($(this).val().length == 14){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
		$('#telefone').mask('(00) 0000-0000');
	} else {
		
	}
	});
	
	$('#celular').mask('(00) 0 0000-0000');
	$('#celular').blur(function(event) {
	if($(this).val().length == 16){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
		$('#telefone').mask('(00) 0 0000-0000');
	} else {
	}
	});
	
	$('#rg').mask('99.999.999-9' || '99.999.999-a');
	$('#rg').blur(function(event) {
	if($(this).val().length == 11){ // 
		$('#rg').mask('99.999.999-9" || "99.999.999-a');
	} else {
		
	}
	});	
	
	
	</script>
    
<?php include('inc/footer.php'); ?>
