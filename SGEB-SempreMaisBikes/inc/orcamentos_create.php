<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->
<?php
session_start();
require '../banco.php';

    $Produto1 = $_POST['produto1'];
	$Produto2 = $_POST['produto2'];
	$Produto3 = $_POST['produto3'];
	$Produto4 = $_POST['produto4'];
	$Produto5 = $_POST['produto5'];
	$Produto6 = $_POST['produto6'];
	$Produto7 = $_POST['produto7'];
	$Produto8 = $_POST['produto8'];
	$Produto9 = $_POST['produto9'];
	$Produto10 = $_POST['produto10'];
	

// Colocando os valores das peças nas variaveis Produto
if($Produto1 == null){
   		$produto1 = null;
    }else{ 
    	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
		$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto1";
		$rs = mysqli_query($con,$query);
		if(mysqli_query($con, $query))
		{
			mysqli_close($con);
		}else{
		    die("Error:".$con->error);
		    mysqli_close($con);
		}
		$resuPecas = mysqli_fetch_array($rs);
		$p1_cod_pecas = $resuPecas['cod_pecas'];
		$p1_nome = $resuPecas['nome'];
		$p1_preco = $resuPecas['preco']; 

    }
	
if($Produto2 == null){
   		$produto2 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto2";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p2_cod_pecas = $resuPecas['cod_pecas'];
	$p2_nome = $resuPecas['nome'];
	$p2_preco = $resuPecas['preco'];
	}	

if($Produto3 == null){
   		$produto3 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto3";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p3_cod_pecas = $resuPecas['cod_pecas'];
	$p3_nome = $resuPecas['nome'];
	$p3_preco = $resuPecas['preco'];
	}	

if($Produto4 == null){
   		$produto4 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto4";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p4_cod_pecas = $resuPecas['cod_pecas'];
	$p4_nome = $resuPecas['nome'];
	$p4_preco = $resuPecas['preco'];
	}	

if($Produto5 == null){
   		$produto5 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto5";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p5_cod_pecas = $resuPecas['cod_pecas'];
	$p5_nome = $resuPecas['nome'];
	$p5_preco = $resuPecas['preco'];
	}	

if($Produto6 == null){
   		$produto6 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto6";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p6_cod_pecas = $resuPecas['cod_pecas'];
	$p6_nome = $resuPecas['nome'];
	$p6_preco = $resuPecas['preco'];
	}	

if($Produto7 == null){
   		$Produto7 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto7";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p7_cod_pecas = $resuPecas['cod_pecas'];
	$p7_nome = $resuPecas['nome'];
	$p7_preco = $resuPecas['preco'];
	}	

if($Produto8 == null){
   		$Produto8 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto8";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p8_cod_pecas = $resuPecas['cod_pecas'];
	$p8_nome = $resuPecas['nome'];
	$p8_preco = $resuPecas['preco'];

	}	

if($Produto9 == null){
   		$produto9 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto9";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p9_cod_pecas = $resuPecas['cod_pecas'];
	$p9_nome = $resuPecas['nome'];
	$p9_preco = $resuPecas['preco'];
	}	

if($Produto10 == null){
   		$produto10 = null;
    }else{
	$con = new mysqli('localhost', 'root', 'root', 'db_estoque');
	$query= "SELECT cod_pecas, nome, preco FROM tb_pecas where cod_pecas = $Produto10";
	$rs = mysqli_query($con,$query);
	if(mysqli_query($con, $query))
	{
		mysqli_close($con);
	}else{
	    die("Error:".$con->error);
	    mysqli_close($con);
	}
	$resuPecas = mysqli_fetch_array($rs);
	$p10_cod_pecas = $resuPecas['cod_pecas'];
	$p10_nome = $resuPecas['nome'];
	$p10_preco = $resuPecas['preco'];
	}


// Juntando os valores com - para dar uma explode na outra tela	
	if ($p1_cod_pecas == null)
	{
		$cortar = "nulo";
	}else{
		$cortar = "$p1_cod_pecas";
	}
		
	if ($p2_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p2_cod_pecas";
	}
	
	if ($p3_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p3_cod_pecas";
	}
	
	if ($p4_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p4_cod_pecas";
	}
	
	if ($p5_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p5_cod_pecas";
	}
	
	if ($p6_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p6_cod_pecas";
	}
	
	if ($p7_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p7_cod_pecas";
	}
	
	if ($p8_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p8_cod_pecas";
	}
	
	if ($p9_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p9_cod_pecas";
	}
	
	if ($p10_cod_pecas == null)
	{
		$cortar = "$cortar-nulo";
	}else{
		$cortar = "$cortar-$p10_cod_pecas";
	}

	// Jogando o resultado da soma na variavel / $resumo_orcamentos = implode('-', $cortar);
	$resumo_orcamentos = "$cortar";
	echo "$resumo_orcamentos";

	$somatotal = ($p1_preco + $p2_preco + $p3_preco + $p4_preco + $p5_preco + $p6_preco + $p7_preco + $p8_preco + $p9_preco + $p10_preco);


    $cliente = $_POST['cliente'];
	$rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
	

	date_default_timezone_set('America/Sao_Paulo');
	$data_orcamento = 'Default CURRENT_TIMESTAMP';
	
	


	$pdo = Banco::conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO tb_orcamento (cliente, rg, telefone, celular,resumo_orcamento,valor_orcamento) VALUES(?,?,?,?,?,?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($cliente,$rg,$telefone,$celular,$resumo_orcamentos,$somatotal));
	Banco::desconectar();
	
	header("Location: ../orcamentos.php");

		

?>

					