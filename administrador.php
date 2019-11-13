<?php
include_once("conexao.php");

function CadastrarAdministrador($nome,$email,$senha){
	$sql = 'INSERT INTO tb_administrador VALUES (null,"'.$nome.'","'.$email.'","'.$senha.'",default)';
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

function Login($user,$pass){
	$sql = 'SELECT cd_administrador id, nm_administrador nome, cd_senha senha, nm_email email FROM tb_administrador WHERE nm_email ="'.$user.'" AND cd_senha = "'.$pass.'"';
	$res = $GLOBALS['c']->query($sql);
	if($res->num_rows > 0){
		$user = $res->fetch_array();
		//sessão no php
		$_SESSION['id'] = $user['id'];
		$_SESSION['nome'] = $user['nome'];
		$_SESSION['senha'] = $user['senha'];
		$_SESSION['email'] = $user['email'];
		echo json_encode($user);
	}else{
		//verificamos se ele é outro tipo de usuário
	}
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