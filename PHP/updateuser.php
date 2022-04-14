<?php 
$nome     = $_POST['name'];
$senha    = $_POST['pass'];
$mensagem = $_POST['mensagem'];
$versao   = $_POST['versao'];
$id       = $_POST['id'];
updateuser($nome,$senha,$mensagem,$versao,$id);

function updateuser($nome,$senha,$mensagem,$versao,$id){
    require_once("conexao.php");
       $conn = new CONEXAO ("user");
       $con = $conn->getConnection();

       $sql ="UPDATE `login` SET Nome = :Nome ,Senha = :Senha, Mensagem = :Mensagem, Atualizar = :versao WHERE ID = :ID ";

       $stmt = $con->prepare($sql);
       $stmt->bindParam(':Nome',$nome);
       $stmt->bindParam(':Senha',$senha);
       $stmt->bindParam(':Mensagem',$mensagem);
       $stmt->bindParam(':versao',$versao);
       $stmt->bindParam(':ID',$id);
      
       if($stmt->execute())
        echo json_encode(array("statusCode"=>200));
       else 
        echo json_encode(array("statusCode"=>201));  

 }