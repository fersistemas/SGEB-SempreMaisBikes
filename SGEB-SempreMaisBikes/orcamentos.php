<?php include('inc/header.php'); ?>
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Lista de Orçamentos </h4>
				</div>
				<div class="card-body">
					<div class="table-responsive table-bordered table-sm">
						<table class="table">
							<thead>
								<tr> <!-- Tabela com as informações da tabela(db) orçamento  -->
									<th style="text-align: center; vertical-align:middle !important" scope="col">#</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Cliente</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Telefone</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Celular</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Valor</th>								
									<th style="text-align: center; vertical-align:middle !important" scope="col">Verificar</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Excluir&nbsp </th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Finalizar</th>
								</tr>
							</thead>
							<tbody>
								<!-- Comandos de banco de dados para chamar informaçoes cadastradas na tabela de orçamento -->
								<?php
								include 'banco.php';
								$pdo = Banco::conectar();
								$sql = 'SELECT * FROM tb_orcamento ORDER BY cod_orcamento DESC';
								$id = 'cod_orcamento';
								
								foreach($pdo->query($sql)as $row)
								{
									echo '<tr>';
										  echo '<th scope="row" style="text-align: center; vertical-align:middle !important">'. $row[$id] . '</th>';
									echo '<td style="vertical-align:middle !important">'. $row['cliente'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['telefone'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['celular'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. 'R$: ' . number_format($row['valor_orcamento'], 2, ',', '.').  '</td>';
									echo ' ';									
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-info" href="orcamentos_view.php?id='.$row[$id].'"><i class="fa fa-search"></i></a>';
									echo ' ';
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-danger" href="orcamentos_delete.php?id='.$row[$id].'"><i class="fa fa-trash-o fa-lg"></i></a>';
									echo ' ';
									echo ' ';									
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-success" href="orcamentos_finalizar.php?id='.$row[$id].'"><i class="fa fa-check-circle"></i></a>';
									echo ' ';
									echo '</td>';
									echo '</tr>'; 
									$_SESSION['cod_orcamento'] = $row[$id];
								}
								Banco::desconectar();
								
								
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>				
		</div>
    </div>
<?php include('inc/footer.php'); ?>
