$(document).ready(function() {
	moment.locale('es', {
		months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
		monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
		weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado'.split('_'),
		weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
		weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
	});
});
$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var m = moment();

            console.log("nombre: "+ $("input#nombre").val())
            console.log("nombre: "+ $("#nombre").val())
            var name = $("input#nombre").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var tel = $("input#telefono").val();
            var fecha = m.format('YYYY-MM-DD');
            var hora = m.format('HH:mm:ss');
            console.log(tel);
            var parametros = {
                "nombre" : name,
                "email" : email,
                "mensaje" : message,
                "telefono" : tel,
                "fecha": fecha,
                "hora": hora
            }
            console.log(parametros)
            $.ajax({
                url: '../../itech/php/mensajes/insertarMensaje.php',
                data: parametros,
                type: 'POST',
                success: function(respuesta) {
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Tu mensaje ha sido enviado. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                    console.log("si sirvió")
                    /*$.ajax({
                        url: "./mail/contact_me.php",
                        type: "POST",
                        data: {
                            name: name,
                            email: email,
                            message: message
                        },
                        cache: false,
                        success: function() {
                            // Success message
                            $('#success').html("<div class='alert alert-success'>");
                            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                            $('#success > .alert-success')
                                .append("<strong>Your message has been sent. </strong>");
                            $('#success > .alert-success')
                                .append('</div>');
        
                            //clear all fields
                            $('#contactForm').trigger("reset");
                        },
                        error: function() {
                            // Fail message
                            $('#success').html("<div class='alert alert-danger'>");
                            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                            $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                            $('#success > .alert-danger').append('</div>');
                            //clear all fields
                            $('#contactForm').trigger("reset");
                        },
                    })*/
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
