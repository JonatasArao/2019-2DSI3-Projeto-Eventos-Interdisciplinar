<?php
include('administrador.php');

if($_POST){
	switch ($_GET['acao']) {
		case 'cadastrar':
			//chamamos o método cadastrar
			if(CadastrarAdministrador($_POST['nome'],$_POST['email'],$_POST['senha'])){
				echo 'Cadastrado com Sucesso';
			}else{
				echo 'Erro ao cadastrar';
			}
			break;

		case 'listar':
			//chamamos o método listar
			break;

		case 'editar':
			//chamamos o método editar
			break;

		case 'excluir':
			//chamamos o método excluir
			break;
		
		default:
			# code...
			break;
	}
}