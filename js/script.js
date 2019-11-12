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
			console.log(user.nome);
		}
	});
	return false;
});