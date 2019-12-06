<?php include('inc/header.php'); ?>
	<div class="box_center">
		<div class="card">
			<div class="card-header">
				<h4 style="text-align: center; vertical-align:middle !important" class="well"> Adicionar Categoria </h4> <!-- Título da tabela -->
			</div>
			<div class="card-body">
				<form class="form-row" action="inc/modelos_create.php" method="post"> <!-- Formulario de modelos -->
					<div class="form-group col-md-9">
						<label class="control-label">Modelo:</label>
						<div class="controls"> 
							<input size="50" class="form-control" name="modelo" type="text" placeholder="Digite o nome do Modelo" required="" value="">
						</div>
					</div>					
					<div class="form-group col-md-3">
						<label class="control-label">Preco R$:</label>
						<div class="controls">
							<input size="50" class="form-control" id="preco" name="preco" type="text" placeholder="Digite o Valor" required="" value="">
						</div>
					</div>
					<div class="form-actions">
						<br/>
						<button type="submit" class="btn btn-success" action="inc/modelos_create.php">Adicionar</button>
					</div>
				</form>
			</div>
		</div>
    </div>

	<script type="text/javascript">
	$('#preco').mask('#.##0,00', {reverse: true});
	$('#preco').blur(function(event) {
	if($(this).val().length == 10){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
		$('#telefone').mask('(00) 0000-0000');
	} else {
		
	}
	});
	
	$('#celular').mask('(00) 0 0000-0000');
	$('#celular').blur(function(event) {
	if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
		$('#telefone').mask('(00) 0 0000-0000');
	} else {
	}
	});
	</script>	
<?php include('inc/footer.php'); ?>