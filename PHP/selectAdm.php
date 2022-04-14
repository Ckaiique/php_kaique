<?php 
function getAdm(){
        require_once("conexao.php");
        $conn = new CONEXAO ("admin");
        $con = $conn->getConnection();
        
        $sql = "SELECT NOME.CODADMIN, NOME.NAME NMADMIN,
                USER.USER_NAME NMUSER,
                EMAIL.ADMEMAIL EMAIL,
                pass.PASS_ADM PASS,
                DT.DATAINI
        
                FROM name_admin NOME 
                LEFT JOIN user_name USER      ON USER.CODUSER_NAME = NOME.CODADMIN
                LEFT JOIN adm_email EMAIL     ON EMAIL.CODEMAIL    = NOME.CODADMIN
                LEFT JOIN admin_password pass ON pass.CODMPASS	   = NOME.CODADMIN
                LEFT JOIN data 	  DT          ON DT.CODDATA        = NOME.CODADMIN  
                WHERE 1=1 ORDER BY NOME.CODADMIN ";
        $statement = $con->prepare($sql);
        $statement->execute();
        $pessoaArray = $statement->fetchAll(PDO::FETCH_ASSOC);
            
        return $pessoaArray ;
        }

$adm = getAdm();


if(isset($adm)){
        foreach($adm as $v){
                        
?>
        <tr>
            <td><?= $v['CODADMIN'];?></td>
            <td><?= $v['NMADMIN']; ?></td>
            <td><?= $v['NMUSER'];  ?></td>
            <td><?= $v['EMAIL'];   ?></td>
            <td><?= $v['DATAINI']; ?></td>
            <td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
			
                        data-id     = "<?= $v['CODADMIN'];?>"
			data-name   = "<?= $v['NMADMIN']; ?>"
			data-nmuser = "<?= $v['NMUSER'];  ?>"
			data-email  = "<?= $v['EMAIL'];   ?>"
			data-pass   = "<?= $v['PASS'];    ?>"
			>Edit</button></td>
        </tr>
<?php
        }
}else {
    echo "0 results";
}

?>