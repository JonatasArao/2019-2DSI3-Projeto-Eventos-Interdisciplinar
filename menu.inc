<ul class="nav flex-column">
	<li class="nav-item">
		<a class="nav-link text-white" href="home.html">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link text-white" href="#" id="cadAdm">Novo Administrador</a>
	</li>
	<li class="nav-item">
		<a class="nav-link text-white" href="#" id="listAdm">Listar Administradores</a>
	</li>
	<li class="nav-item">
		<a class="nav-link text-white" href="#" id="sair">Sair</a>
	</li>
</ul>

<script>
  $(document).on('click','#listAdm',function(){
  	$('#dashboard').load('listAdministrador.php');
  });
</script>