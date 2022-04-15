<?php 
/**
 * para poder usar essa class update o params tem que passar na ordem 
 * exemplo DENTROI DA CLASSE ESTA DESSE JEITO
 * $params = ['NOME'     => $_POST['name'],
 *            'SENHA'    => $_POST['pass'],
 *            'MENSAGEM' => $_POST['mensagem'],
 *            'DATA'     => $_POST['versao'],
 *            'ID'       => $_POST['id'],
 *            'FUNC'     => $_POST['func']];
 * 
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
