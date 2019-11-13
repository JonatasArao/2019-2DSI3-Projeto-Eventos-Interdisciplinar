<?php
include('administrador.php');

if($_POST){
	switch ($_GET['acao']) {
		case 'cadastrar':
			//chamamos o método cadastrar
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			if(CadastrarAdministrador($nome,$email,$senha)){
				echo 'Cadastrado com Sucesso';
			}else{
				echo 'Erro ao cadastrar';
			}
			break;

		case 'login':
			//chamamos o método login
			$login = $_POST['lemail'];
			$senha = $_POST['lsenha'];
			Login($login,$senha);
			break;

		case 'listar':
			//chamamos o método listar
			break;

		case 'editar':
			//chamamos o método editar
			break;

		case 'excluir':
			$id = $_POST['id'];
			if(ExcluirAdministrador($id)){
				echo "Excluido";
			}else{
				echo "Erro ao excluir";
			}
			//chamamos o método excluir
			break;
		
		default:
			# code...
			break;
	}
}