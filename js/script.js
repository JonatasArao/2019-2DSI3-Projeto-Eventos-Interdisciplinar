$(document).on('submit','#cAdministrador',function(){
	var dados = $(this).serialize();
	$.ajax({
		url: 'controlAdministrador.php?acao=cadastrar',
		type: 'POST',
		data: dados,
		success:function(retorno){
			alert(retorno);
		}
	});
	return false;
});
$(document).on('submit','#lAdministrador',function(){
	var dados = $(this).serialize();
	$.ajax({
		url: 'controlAdministrador.php?acao=login',
		type: 'POST',
		data: dados,
		success:function(retorno){
			var user = JSON.parse(retorno);
			sessionStorage.setItem('user', retorno);
			localStorage.setItem('id', user.id);
			localStorage.setItem('nome', user.nome);
			localStorage.setItem('email', user.email);
			localStorage.setItem('senha', user.senha);
			window.location = 'home.html';
		}
	});
	return false;
});