<?php
include_once("conexao.php");

function CadastrarAdministrador($nome,$email,$senha){
	$sql = 'INSERT INTO tb_administrador VALUES (null,"'.$nome.'","'.$email.'","'.$senha.'")';
	$res = $GLOBALS['c']->query($sql);
	return ($res) ? true : false;
}

function ListarAdministrador($id){
	$sql = 'SELECT * FROM tb_administrador';
	if($id > 0){
		$sql.= ' WHERE cd_administrador = '.$id;
	}
	$res = $GLOBALS['c']->query($sql);
	return $res;
}

function AtualizarAdministrador($cd,$nome,$email,$senha){
	$sql = 'UPDATE tb_administrador SET nm_administrador = "'.$nome.'", nm_email = "'.$email.'", cd_senha = "'.$senha.'" WHERE cd_administrador = '.$cd;
	$res = $GLOBALS['c']->query($sql);
	return ($res) ? true : false;
}

function ExcluirAdministrador($cd){
	$sql = 'DELETE FROM tb_administrador WHERE cd_administrador = '.$cd;
	$res = $GLOBALS['c']->query($sql);
	return ($res) ? true : false;
}