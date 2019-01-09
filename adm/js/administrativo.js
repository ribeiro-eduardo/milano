function addUsuario()
{
	$('#btnAdd').attr('disabled', true);
	$('#usuariosGrid > tbody:last-child').append('<tr id="newTr"><td></td>'+
							'<td><input type="text" class="form-control" placeholder="Nome" id="nome"></input></td>'+
							'<td><select class="form-control"><option value="1">Administrador</option></select></td>'+
							'<td>'+
								'<button type="button" class="btn btn-xs btn-success" onclick="salvar()">Salvar</button> '+
								'<button type="button" class="btn btn-xs btn-danger" onclick="cancelAdd()">Cancelar</button>'+
							'</td></tr>');

}

function cancelAdd()
{
	$('#newTr').remove();
	$('#btnAdd').attr('disabled', false);
}

function salvar()
{
	let nome = $('#nome').val();
	let url = 'processAdministrativo.php';

	$.ajax({
		url: url,
		dataType: 'html',
		data: {'nome':nome},
		type: "POST",
		success: function(cb){
			window.location.replace(url);
			console.log(cb);
		}
	});
}