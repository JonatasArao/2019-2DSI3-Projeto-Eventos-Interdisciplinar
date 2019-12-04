<?php
include 'conn.php';
/*
function Login($email, $pass){
	$sql = 'SELECT
			cd,
			nome
			FROM 
			VW_ACCESS where
			email = "'.$email.'" and
			senha = "'.$pass.'" and
			status = "T"';
	$res = $GLOBALS['con']->query($sql);
	if($res->num_rows > 0){
		$user = $res->fetch_array();
			session_start();
			$_SESSION['id'] 	= $user['cd'];
			$_SESSION['nome']	= $user['nome'];
			print'
			<script>
				alert("Bem vindo '.$_SESSION['nome'].'");
				location.href = "adm.php";
			</script>
			';
	}
	else{
		echo'
			<script language="JavaScript">
				alert("Usuário e/ou senha inválidos");
				location.href="index.php";
			</script>
			';
	}
}
*/

function Login($email, $pass){
	$sql = 'SELECT
			cd_administrador,
			nm_administrador
			from TB_ADMINISTRADOR
			WHERE
			nm_email = "'.$email.'" and
			cd_senha = "'.$pass.'" and
			st_administrador = "T"';
	$res = $GLOBALS['con']->query($sql);

	if($res->num_rows == 1){
		$user = $res->fetch_array();
		session_start();
		$_SESSION['id']		= $user['cd_administrador'];
		$_SESSION['nome'] 	= $user['nm_administrador'];
		$_SESSION['tipo']	= "adm";
		print'
			<script>
				alert("Bem vindo '.$_SESSION['nome'].'");
				location.href = "adm.php";
			</script>
			';
	}
	if($res->num_rows == 0){
		$sql = 'SELECT
			cd_usuario,
			nm_usuario
			from TB_USUARIO
			WHERE
			nm_email = "'.$email.'" and
			cd_senha = "'.$pass.'" and
			st_usuario = "T"';
		$res = $GLOBALS['con']->query($sql);

		if($res->num_rows == 1){
			$user = $res->fetch_array();
			session_start();
			$_SESSION['id']		= $user['cd_usuario'];
			$_SESSION['nome'] 	= $user['nm_usuario'];
			$_SESSION['tipo']	= "user";
			print'
				<script>
					alert("Bem vindo '.$_SESSION['nome'].'");
					location.href = "adm.php";
				</script>
				';
		}
		else{
			echo'
				<script language="JavaScript">
					alert("Usuário e/ou senha inválidos");
					location.href="index.php";
				</script>
				';
		}
	}
}

function VerificaLogin(){
	if (!isset($_SESSION['id']) == TRUE) {
		print'
			<script language= "JavaScript">
				alert("Não fez login");
				location.href="index.php";
			</script>
			';
	}

}

?>