<?php include('inc/header_painelAdm.php'); ?>	
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" style="text-align: center; vertical-align:middle !important" class="well"> Lista de Usuarios </h4>
				</div>					
				<div class="table-responsive table-bordered table-sm">
					<div class="box_centerFull">
						<table class="table">
							<thead>
								<tr> <!-- Tabela com as informações da tabela(db) modelo  -->
									<th style="text-align: center; vertical-align:middle !important" scope="col">#</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Nome do Usuário</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Usuários</th>
									
									<th style="text-align: center; vertical-align:middle !important" scope="col">Excluir</th>

								</tr>
							</thead>
							<tbody>
								<!-- Comandos de banco de dados para chamar informaçoes cadastradas na tabela de modelo -->
								<?php
								include 'banco.php';
								$pdo = Banco::conectar();
								$sql = 'SELECT * FROM tb_login ORDER BY cod_login DESC';
								$id = 'cod_login';
								
								foreach($pdo->query($sql)as $row)
								{
									echo '<tr>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['cod_login'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['user'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['user_name'] . '</td>';

									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-danger" href="usuarios_delete.php?id='.$row[$id].'"><i class="fa fa-trash-o fa-lg"></i></a>';
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
<?php 
	$_SESSION['cod_peca'] = $row[$id];

?>
