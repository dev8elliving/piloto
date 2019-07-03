$(document).ready(function(){

	// campos
	var rut_txt = $('#rut_txt'),
		nombre_txt = $('#nombre_txt'),
		telefono_txt = $('#telefono_txt'),
		email_txt = $('#email_txt'),
		proyecto_txt = $('#proyecto_txt');
	// cambos true false
	var rut_ok = false;
		nombre_ok = false;
		telefono_ok = false;
		email_ok = false;
		proyecto_ok = false;

	rut_rut = {}

	// mail formato
	var mailformato = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	$('#rut_txt').Rut({
	  validation: true,
	  format_on: 'keyup',
	  on_error: function(){ rut_rut = 0; },
	  on_success: function(){ rut_rut = 1; } 
	});

	var rut_val = $('#rut_txt')
	//validar campo rut numerico
    rut_val.keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: contacto, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 75 || e.keyCode > 75) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    // validacion campos numericos en telefono

	var codChile = $('#telefono');
	// codChile.focus(function(){ $('#telefono').val('+569'); });
	codChile.val('+569');

	 $('#telefono').keydown(function (e) {
	    // Allow: backspace, delete, tab, escape, enter and .
	    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
	         // Allow: Ctrl+A
	        (e.keyCode == 65 && e.ctrlKey === true) ||
	         // Allow: Ctrl+C
	        (e.keyCode == 67 && e.ctrlKey === true) ||
	         // Allow: Ctrl+X
	        (e.keyCode == 88 && e.ctrlKey === true) ||
	         // Allow: home, end, left, right
	        (e.keyCode >= 35 && e.keyCode <= 39)) {
	             // let it happen, don't do anything
	             return;
	    }
	    // Ensure that it is a number and stop the keypress
	    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	        e.preventDefault();
	    }
	});

	$("#email_txt").keypress(function (evt) {

	  var keycode = evt.charCode || evt.keyCode;
	  if (keycode  == 32 || keycode == 229) { //Enter key's keycode
	    return false;
	  }
	});

	$('.enviar-form').on('click', function(){
		
		var form = $('#formu');

			if (rut_txt.val() != "" && rut_rut === 1 ) {
				rut_ok = true;
			} else {
				$('<div class="error-field rut_error">Error al escribir su Rut</div>').insertBefore('#rut_txt');
				rut_txt.addClass('error-color');
				rut_ok = false;
			}
			$('.rut_error').on('click', function(){
				$(this).remove();
				rut_txt.focus();
			});
			rut_txt.focus(function(){
				$('.rut_error').remove();
				rut_txt.removeClass('error-color');
			});

			if (nombre_txt.val() != "" && nombre_txt.val().length > 5) {
				nombre_ok = true;
			} else {
				$('<div class="error-field nom_error">Error al escribir su Nombre</div>').insertBefore('#nombre_txt');
				nombre_txt.addClass('error-color');
				nombre_ok = false;
			}
			$('.nom_error').on('click', function(){
				$(this).remove();
				nombre_txt.focus();
			});
			nombre_txt.focus(function(){
				$('.nom_error').remove();
				nombre_txt.removeClass('error-color');
			});

			if (telefono_txt.val() != "" && telefono_txt.val().length > 8) {
				telefono_ok = true;
			} else {
				$('<div class="error-field telefono_error">Error al escribir su Número de teléfono</div>').insertBefore('#telefono_txt');
				telefono_txt.addClass('error-color');
				telefono_ok = false;
			}
			$('.telefono_error').on('click', function(){
				$(this).remove();
				telefono_txt.focus();
			});
			telefono_txt.focus(function(){
				$('.telefono_error').remove();
				telefono_txt.removeClass('error-color');
			});

			if (email_txt.val() != "" && email_txt.val().length > 8 && email_txt.val().match(mailformato)) {
				email_ok = true;
			} else {
				$('<div class="error-field email_error">Error al escribir su Email</div>').insertBefore('#email_txt');
				email_txt.addClass('error-color');
				email_ok = false;
			}

			$('.email_error').on('click', function(){
				$(this).remove();
				email_txt.focus();
			});
			email_txt.focus(function(){
				$('.email_error').remove();
				email_txt.removeClass('error-color');
			});

			if (proyecto_txt.val() != "") {
				proyecto_ok = true;
			} else {
				$('<div class="error-field tipo_programa_error">Seleccione un programa</div>').insertBefore('#proyecto_txt');
				proyecto_txt.addClass('error-color');
				proyecto_ok = false;
			}
			$('.tipo_programa_error').on('click', function(){
				$(this).remove();
				proyecto_txt.focus();
			});
			proyecto_txt.focus(function(){
				$('.tipo_programa_error').remove();
				proyecto_txt.removeClass('error-color');
			});

			if (rut_ok === true && nombre_ok === true &&  email_ok === true && 
				telefono_ok === true && proyecto_ok === true) {
				
				console.log('enviado, esperando la respuesta del server  :)');
				$('#msj-server').html('Enviando ...');
				$('.modal-mensaje').css('display','block');

				$.ajax({
					type: 'POST',
					url: 'appform/enviar.php',
					data: form.serialize(),
					success: function(data){
						console.log(data);
						form.trigger('reset');
						$('#msj-server').html('Enviado con Éxito!');
						setTimeout(function(){
							$('<div class="cerrar-modal btn-purp-big">Aceptar</div>').insertAfter('#msj-server');
							$('.cerrar-modal').click(function(){ $('.modal-mensaje').css('display','none'); });
							ga('send', 'event', 'mensaje_enviado', 'send', 'form_mensaje_enviado');
							window.location.href = "http://www.inmobiliariaicalma.cl/barcelona/gracias.php";
							return gtag_report_conversion('http://www.inmobiliariaicalma.cl/barcelona/');
						},1000);
					},
					error: function (errorajax){
						console.log(errorajax);
						$('#msj-server').html('Error al conectarce con el servidor!, mensaje no enviado :(');
						setTimeout(function(){
							$('<div class="cerrar-modal btn-purp-big">Aceptar</div>').insertAfter('#msj-server');
							$('.cerrar-modal').click(function(){ $('.modal-mensaje').css('display','none'); });
							//ga('send', 'event', 'No enviado', 'enviar', 'Form5');
						},1000);				
					}
				});
				// para test ajax y probar respuesta del servidor
				// }).done(function(data){ console.log('data') });

			} else {
				console.log('Formulado no enviado  :(');
			}

	});

});