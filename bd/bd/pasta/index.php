<?php
include 'header.php';
include 'function.php';
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<img src="img/logo.png">
				</div>
				<div class="panel-body">
					<form class="form-group" method="post">
						<label>Usuário:</label><br>
						<input type="text" class="form-control" name="email" id="email" placeholder="mail@mail.com">
						<br>
						<label>Senha:</label><br>
						<input type="password" class="form-control" name="senha" id="senha">
						<br>
						<button class="btn-success">Entrar</button>
					</form>				
				</div>
			</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>
<?php
if(isset($_POST['email'], $_POST['senha'])){
	$email = $_POST['email'];
	$pass = $_POST['senha'];

	Login($email, $pass);
}
?>
<style type="text/css">
button{
	float: right;
}
img{
	width: 30%;
}
</style>
</body>
</html>