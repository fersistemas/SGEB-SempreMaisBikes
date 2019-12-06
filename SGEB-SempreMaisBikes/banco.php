<?php

class Banco
{
    private static $dbNome = 'db_estoque';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = 'root';
    
    private static $conexao = null;
    
    public function __construct() 
    {
        try 
     {
         $this->pdo =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
         $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } 
     catch (PDOException $e)
     {
         echo 'connection failed: '.$e->getMessage();
     }
    }
    
    public static function conectar()
    {
        if(null == self::$conexao)
        {
            try
            {
                self::$conexao =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$conexao;
    }
	
	
	
    
    public static function desconectar()
    {
        self::$conexao = null;
    }
}


?>
