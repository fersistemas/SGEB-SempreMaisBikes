<?php include('inc/header.php'); ?>
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" style="text-align: center; vertical-align:middle !important" class="well"> Lista de Modelos </h4>
				</div>					
				<div class="table-responsive table-bordered table-sm">
					<div class="box_centerFull">
						<table class="table">
							<thead>
								<tr> <!-- Tabela com as informações da tabela(db) modelo  -->
									<th style="text-align: center; vertical-align:middle !important" scope="col">#</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Modelo</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Preço</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Editar</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Excluir</th>

								</tr>
							</thead>
							<tbody>
								<!-- Comandos de banco de dados para chamar informaçoes cadastradas na tabela de modelo -->
								<?php
								include 'banco.php';
								$pdo = Banco::conectar();
								$sql = 'SELECT * FROM tb_modelo ORDER BY cod_modelo DESC';
								$id = 'cod_modelo';
								
								foreach($pdo->query($sql)as $row)
								{
									echo '<tr>';
									echo '<th style="text-align: center; vertical-align:middle !important" scope="row">'. $row[$id] . '</th>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['nome'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. 'R$: ' . number_format($row['preco'], 2, ',', '.') . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-warning" href="modelos_update.php?id='.$row[$id].'"><i class="fa fa-edit"></i></a>';
									echo ' ';
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-danger" href="modelos_delete.php?id='.$row[$id].'"><i class="fa fa-trash-o fa-lg"></i></a>';
									echo ' ';
									echo '</td>';
									echo '</tr>';
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