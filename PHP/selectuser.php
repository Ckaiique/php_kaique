<?php 
function getUser(){
        require_once("conexao.php");
        $conn = new CONEXAO ("user");
        $con = $conn->getConnection();
        
        $sql = "SELECT ID,Nome,Senha,Ativo,Mensagem,Atualizar  FROM login
        WHERE 1=1 ORDER BY ID ";
        
        
        $statement = $con->prepare($sql);
        $statement->execute();
        $pessoaArray = $statement->fetchAll(PDO::FETCH_ASSOC);
            
        return $pessoaArray ;
        }

        $getuser = getUser();

if(isset($getuser)){
        foreach($getuser as $v){
    
?>
        <tr>
            <td><?= isset($v['ID'])       && $v['ID']         ? $v['ID']       : '';?></td>
            <td><?= isset($v['Nome'])     && $v['Nome']       ? $v['Nome']     : '';?></td>
            <td><?= isset($v['Ativo'])    && $v['Ativo'] == 1 ?  '<p style="color: green;">On·line</p>' : '<p style="color:red;">Off·line</p>';?></td>
            <td><?= isset($v['Mensagem']) && $v['Mensagem']   ? $v['Mensagem'] : '';?></td>
            <td><?= isset($v['Atualizar'])&& $v['Atualizar']  ? $v['Atualizar']: '';?></td>
            <td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
           
                        data-id       = "<?= isset($v['ID'])       && $v['ID']       ? $v['ID']       : '';?>"
			data-name     = "<?= isset($v['Nome'])     && $v['Nome']     ? $v['Nome']     : '';?>"
			data-mensagem = "<?= isset($v['Mensagem']) && $v['Mensagem'] ? $v['Mensagem'] : '';?>"
			data-versao   = "<?= isset($v['Atualizar'])&& $v['Atualizar']? $v['Atualizar']: '';?>"
			data-pass     = "<?= isset($v['Senha'])    && $v['Senha']    ? $v['Senha']    : '';?>"  
                        ">Edit</button></td>
                        
        </tr>
<?php
        }
}else {
    echo "0 results";
}

?>