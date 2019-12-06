<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->
<?php
session_start();
require '../banco.php';

	$id = $_SESSION['cod_pecas'];
	$cod_modelo = $_SESSION['cod_modelo'];
	$quantidade = $_POST['quantidade'];


	
	
	// update data	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_pecas set quantidade = ? WHERE cod_pecas = $id";
		$q = $pdo->prepare($sql);
		$q->execute(array($quantidade));
		Banco::desconectar();
		header("Location: pecas.php");
		
	
	header("Location: ../pecas.php");
	
	
	

		

?>

					