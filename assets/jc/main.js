jQuery(document).on('submit', `#formlg`, function(event) {
    event.preventDefault();
    jQuery.ajax({

            URL: 'main_app/login.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforSend: function() {
                $('.botonlg').val('validando...');
            }
        })
        .done(function(respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {
                if (respuesta.tipo == 'Admin') {
                    location.href = 'Main.app/Admin/index.php';
                } else if (respuetas.tipo == 'Usuario') {
                    location.href = 'Main.app/usuario/';
                }
            } else {
                $('error').slideDown('slow');

                setTimeout(function() {
                    $('error').slideDown('slow');
                }, 3000);
                $('.botonlg').val('Iniciar Sesion');
            }
        })
        .fail(function(resp) {
            console.log(resp.respondeText);
        })
        .always(function() {
            console.log("complete")
        });
});