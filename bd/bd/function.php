<?php

include 'conn.php';

function Login($email, $senha){
	$sql = 'SELECT
			cd_administrador,
			upper(nm_administrador),
			nm_email,
			cd_senha
			FROM
			TB_ADMINISTRADOR WHERE
			nm_email = "'.$email.'" and
			cd_senha = "'.$senha.'" and
			st_administrador = "T"';

	$res = $GLOBALS['con'] -> query($sql);
	if($res->num_rows > 0){
		$user = $res->fetch_array();
		session_start();
		$_SESSION['id'] = $user['cd_admistrador'];
		$_SESSION['nome'] =$user['upper(nm_administrador)'];
		header("Location:adm.php");

	}
	else{
		echo '
		<script language="JavaScript">
			alert("Usuário e/ou senha inválida");
			location.href="bd/index.php";
		</script>
		';
	}
}

?>