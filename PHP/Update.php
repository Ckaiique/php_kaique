<?php 
/**
 * para poder usar essa class update o params tem que passar na ordem 
  * exemplo DENTROI DA CLASSE ESTA DESSE JEITO
 *            $stmt->bindParam(':Nome',  $this->params['NOME']);
 *            $stmt->bindParam(':Senha', $this->params['SENHA']);
 *            $stmt->bindParam(':email', $this->params['EMAIL']);
 *            $stmt->bindParam(':datas', $this->params['DATA']);
 *            $stmt->bindParam(':ID',    $this->params['ID']);
 */
require_once("conexao.php");
class Update 
{   
   
    public $params;
    public function __construct($params)
    {      
          $this->params = $params;
    }
    
    public function getUpdate(string $TABELA ,$ID, $NOME,$SENHA,$EMAIL,$DATA){
        $conn = new CONEXAO ($this->params['FUNC']);
        $con = $conn->getConnection();
        
        if($this->params['FUNC'] == 'user'){
            
            $sql ="UPDATE {$TABELA} SET {$NOME} = :Nome ,{$SENHA} = :Senha, {$EMAIL} = :email, {$DATA} = :datas WHERE {$ID} = :ID ";
            
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':Nome',  $this->params['NOME']);
            $stmt->bindParam(':Senha', $this->params['SENHA']);
            $stmt->bindParam(':email', $this->params['EMAIL']);
            $stmt->bindParam(':datas', $this->params['DATA']);
            $stmt->bindParam(':ID',    $this->params['ID']);
           
            if($stmt->execute())
            echo json_encode(array("statusCode"=>200));
            else 
            echo json_encode(array("statusCode"=>201));  
            
        }
       
    }
}