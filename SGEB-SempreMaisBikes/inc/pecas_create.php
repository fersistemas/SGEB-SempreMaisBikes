<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->
<?php
session_start();
require '../banco.php';
	
	$cbModelo = $_POST['cbModelo'];
    $nome = $_POST['Pnome'];
	$quantidade = $_POST['Pquantidade'];

	
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query = mysqli_query($con,"SELECT nome, preco FROM tb_modelo WHERE cod_modelo =" . $cbModelo);
	while($categoria = mysqli_fetch_array($query)) {  
	$Mnome = $categoria['nome'];
	$Mpreco = $categoria['preco'];
	}

	
	
	$pdo = Banco::conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO tb_pecas (nome, quantidade, preco, modelo) VALUES(?,?,?,?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($nome,$quantidade,$Mpreco,$cbModelo));
	Banco::desconectar();
	
	header("Location: ../pecas.php");
	
	

		

?>

					