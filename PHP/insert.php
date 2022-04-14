<?php

$name       = $_POST['NAME'];
$email      = $_POST['ADMEMAIL'];
$pass       = $_POST['PASS_ADM'];
$user_name  = $_POST['USER_NAME'];
saveAdmin($name,$email,$pass,$user_name);

function saveAdmin($name,$email,$pass,$user_name)
{
       require_once("conexao.php");
       $conn = new CONEXAO ("admin");
       $con = $conn->getConnection();

$sql1 = "INSERT INTO name_admin     (NAME)     VALUES ('{$name}')";
$sql2 = "INSERT INTO adm_email      (ADMEMAIL) VALUES ('{$email}')";
$sql3 = "INSERT INTO admin_password (PASS_ADM) VALUES ('{$pass}') ";
$sql4 = "INSERT INTO data 	        (DATAINI)  VALUES (NOW())";
$sql5 = "INSERT INTO user_name 	 (USER_NAME)VALUES ('{$user_name}')"; 

       if ($con->exec($sql2)) 
       {        
              $con->exec($sql1);
              $con->exec($sql3);
              $con->exec($sql4);
              $con->exec($sql5);
              echo json_encode(array("statusCode"=>200));
       }
       else {
              echo json_encode(array("statusCode"=>201));
       }

}

?>
 