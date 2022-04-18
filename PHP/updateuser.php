<?php 
/**
 * para poder usar essa class update o params tem que passar na ordem 
 * exemplo DENTROI DA CLASSE ESTA DESSE JEITO
 *            $stmt->bindParam(':Nome',  $this->params['NOME']);
 *            $stmt->bindParam(':Senha', $this->params['SENHA']);
 *            $stmt->bindParam(':email', $this->params['EMAIL']);
 *            $stmt->bindParam(':datas', $this->params['DATA']);
 *            $stmt->bindParam(':ID',    $this->params['ID']);
 * 
 * a Função getUpdate tem que passar os nomes das colunas do  banco de dados
 */

$params = ['NOME'     => $_POST['name'] ,
           'SENHA'    => $_POST['pass'],
           'EMAIL'    => $_POST['mensagem'],
           'DATA'     => $_POST['versao'],
           'ID'       => $_POST['id'],
           'FUNC'     => $_POST['func']];

if($params['FUNC'] == 'user'){
include("Update.php");
$user = new Update($params);
$user->getUpdate('login','ID','Nome','Senha','Mensagem','Atualizar');

}
