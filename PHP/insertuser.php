<?php

$name       = $_POST['NAME'];
$pass       = $_POST['PASS_ADM'];
saveAdmin($name,$pass);

function saveAdmin($name,$pass)
{
       require_once("conexao.php");
       $conn = new CONEXAO ("user");
       $con = $conn->getConnection();

$sql1 = "INSERT INTO login (Nome,Senha,Ativo,Mensagem,Atualizar) VALUES ('{$name}','{$pass}',0,'',0)";


       if ($con->exec($sql1)) 
       {        
              echo json_encode(array("statusCode"=>200));
       }
       else {
              echo json_encode(array("statusCode"=>201));
       }

}

?>
 