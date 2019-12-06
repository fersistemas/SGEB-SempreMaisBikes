<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->
<?php
require '../banco.php';

	$id = $_SESSION['cod_modelo'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];


	// update data	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE tb_modelo set nome = ?, preco = ? WHERE cod_modelo = $id";
		$q = $pdo->prepare($sql);
		$q->execute(array($nome,$preco));
		Banco::desconectar();
		header("Location: ../modelos.php");
?>

					