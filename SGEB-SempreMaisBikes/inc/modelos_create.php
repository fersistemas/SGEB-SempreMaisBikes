<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->	
<?php

require '../banco.php';


    $modelo = $_POST['modelo'];
    $preco = $_POST['preco'];

	$pdo = Banco::conectar();
	$sql = "INSERT INTO tb_modelo (nome,preco) VALUES(?,?)";
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$q = $pdo->prepare($sql);
	$q->execute(array($modelo, $preco));
	Banco::desconectar();
	header("Location: ../modelos.php");

		

?>

					