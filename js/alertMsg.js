function alertMsg(title = '', msg = '', type = 'success', duration = 3000, btn = false) {
	swal({
		title: title,
		text: msg,
		type: type,
		html: true,
		confirmButtonText: 'Aceptar',
		cancelButtonText: 'Cancelar',
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#1ab394',
		showCancelButton: btn,
		timer: duration
		/*customClass: {
         container: 'my-zswal'
      }*/
	});
}

function validarAccion(
	title = '¿Está seguro de realizar esta acción?',
	msg = 'El proceso no tendra reversa en caso de aceptar culminar esta acción.'
) {
	swal
		.fire({
			title: title,
			text: msg,
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#1ab394',
			confirmButtonText: 'Continuar'
		})
		.then((result) => {
			if (result.value) {
				rta = true;
			} else {
				rta = false;
			}
			alert(rta);
		});
}

function confirmaSalir(mensaje) {
	var agree = confirm(mensaje);
	if (agree) {
		return true;
	} else {
		return false;
	}
}
