//Función que se ejecutará cuando se haya leido todo el documento HTML.
$(function()
{  
    //Al perder el foco en cada uno de los inputs del formulario se ejecutará su función de comprobación correspondiente.
    $('#numTarjeta').blur(comprobarNumeroTarjeta());
    $('#mesExpira').blur(comprobarMes());
    $('#anyoExpira').blur(comprobarAnyo());
    $('#cvv').blur(comprobarCVV());
    $('#dueñoTarjeta').blur(comprobarPropiertario());

    //Al hacer click en calcelar pago se eliminan los valores introducidos en el formulario.
    $('#cancelarPago').click(function()
    {
        $('#numTarjeta').val('');
        $('#mesExpira').val('');
        $('#anyoExpira').val('');
        $('#cvv').val('');
        $('#dueñoTarjeta').val('');
    });

    //Al hacer click en PAGAR YA se eliminará el comportamiento por defecto del botón, volverá a comprobar el formulario y si lo datos son validos enviará el formulario al servidor.
    $('#aceptarPago').click(function()
    {
        //Si el formulario es correcto se manda al servidor.
        if (validarFormulario() == true)
        {

        }

        //En caso contrario se evita el envio y se muestran los errores detectaros en el formulario.
        else
        {
            $(this).preventDefault();
            validarFormulario();
        }
    });
});

//Función que llama a todas las funciones de comprobación.
function validarFormulario()
{
    comprobarNumeroTarjeta();
    comprobarMes();
    comprobarAnyo();
    comprobarCVV();
    comprobarPropiertario();
}

//Se comprueba el formato de la tarjeta. Que no contenga letras y su longitud sea de 16 números.
function comprobarNumeroTarjeta()
{
        var divError = $('<div id="errorNum" class="alert alert-danger" role="alert">'); 
        var formatoTarjeta = /^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$/;
        
        if ($('#numTarjeta').length != 16)
        {
            //Eliminamos los anteriores errores para que no se acumulen sino que se sobreescriban.
            $('#errorNum').remove();
            $(this).val("");
            $(divError).text('Hay un error en en número de la tarjeta. Por favor, reviselo.');
            $(divError).css('margin-top', '5px');
            $('#formNum').append(divError);

            //Cambiamos el estilo del borde del imput.
            //$('numTarjeta').css('border', 'red')

            return false;
        }

        //Si la longitud del campo introducido es correcta se comprobará el formato de la tarjeta.
        else
        {
            if (!formatoTarjeta.test($(this).val()))
            {
                $('#errorNum').remove();
                $(this).val("");
                $(divError).css('color', 'red');
                $(divError).text('El número de tarjeta introducido no es valido.');

                return false;
            }

            else
            {
                $('#errorNum').remove();
                return true;
            }
        }
}

function comprobarMes()
{

    //Validamos el campo de mes de expiración solo permitiendo dos números del 0 al 9.
        var divError = $('<div id="errorMes" class="alert alert-danger" role="alert">'); 
        var numeros = /^[0-9]{2}/;

        if (!numeros.test($('#mesExpira').val()))
        {
            //Eliminamos los anteriores errores para que no se acumulen sino que se sobreescriban.
            $('#errorMes').remove();
            $(this).val("");
            $(divError).text('Debe introducir un mes valido en formato númerico.');
            $(divError).css('margin-top', '5px');
            $('#formFechas').append(divError);

            return false;
        }

        else
        {
            //Comprobamos que el valor introducido no sea mayor que 12.
            if ($(this).val() > 12)
            {
                //Eliminamos los anteriores errores para que no se acumulen sino que se sobreescriban.
                $('#errorMes').remove();
                $(this).val("");
                $(divError).text('Debe introducir un mes valido, en formato MM. (Ejemplo: 05)');
                $(divError).css('margin-top', '5px');
                $('#formFechas').append(divError);

                return false;
            }

            //Si no es así, el valor es correcto. Se eliminarán los mensajes de error que hayan podido introducirse.
            else
            {
                $('#errorMes').remove();
            }
        }
}

//Validamos el campo de año para que solo permita dos números del 0 al 9.
function validarAnyo()
{
       var divError = $('<div id="errorAnyo" class="alert alert-danger" role="alert"></div>')
       var numeros = /^[2-9]{2}/;

       if (!numeros.test($('#anyoExpira').val()))
       {
           $('#errorAnyo').remove();
           $(this).val("");
           $(divError).text('El año de expiración introducido no es valido.');
           $('#formFechas').append(divError);
           
           return false;
       }

       else
       {
           $('#errorAnyo').remove();
       }
}

//Validamos el código de seguridad solamente permitiendo 3 números.
function comprobarCVV()
{
    
    var divError = $('<div id ="errorCVV" class="alert alert-danger" role="alert"></div>')
    var numeros = /^[0-9]{3}/;

    if (!numeros.test($(this).val()))
    {
        $('#errorCVV').remove();
        $(this).val("");
        $(divError).text('El código de validación no es correcto.');
        $('#formFechas').append(divError);

        return false;
    }

    else
    {
        $('#errorCVV').remove();
    }
}

//Cuando se pierda el foco del input se comprobará el formato introducido.
function comprobarPropiertario()
{
        var divError = $('<div id="errorNombre" class="alert alert-danger" role="alert">')
        var nombreApellidos = /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/;

        if (!nombreApellidos.test($(this).val()))
        {
            //En este caso no eliminamos el valor del campo ya que simplemente el usuario puede haber cometido un fallo al escribir y sería demasiado tedioso volver a escribir el nombre completo.
            $('#errorNombre').remove();
            $(divError).text('El formato del nombre de propietario no es valido. Por favor, reviselo.');
            $(divError).css('margin-top', '5px');
            $("#formNombre").append(divError);

            return false;
        }

        else
        {
            $('#errorNombre').remove();
        }
}