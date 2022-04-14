<?php 
/**
 * @return \PDO
 */

 class CONEXAO 
 {

	public $dbname ;
	public function __construct(string $dbname)
	{
		$this->dbname = $dbname; 	
	}

	public	function getConnection()
	{
		$servername = "mysql:host=1;dbname={$this->dbname}";
		$username = "";
		$password = ";
		
		try{
			$pdo = new PDO($servername, $username, $password);
			return $pdo;
		}
		catch (PDOException $ex){
			echo 'Erro '.$ex->getMessage();
		}
		
	}
}
?>

