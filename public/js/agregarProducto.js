$(function(){
    $('#color').hide();
    $('#talla').hide()
    $('#subCategory').hide();

    $('#category').change(function(){
        if($(this).val() == 'Ropa'){
            $('#color').show();
            $('#talla').show();
            $('#subCategory').show();
        }
    });

    //Se ejecutará una vez se ha leido todo el documento agregarProducto.
    $(function()
      {
        $('#nombre').blur(function()
                          {
            console.log('prueba')
            validarNombre();
        });
        $('submit').click(function ()
                          {
            $('submit').preventDefault();
            validarFormulario();
        });
    });

    //Comprobará que el campo nombre tiene al menos un valor.
    function validarNombre()
    {
        var contenido = $('#nombre').val();
        var divError = $('<div id="errorNombre">'); 

        if (contenido == "")
        {
            console.log('prueba');
            $('#errorNombre').remove();
            $(divError).css('color', 'red');
            $(divError).text('Debe introducir una valor en el formulario.');
            $('#formNombre').append(divError);
        }

        else
        {
            $('#errorNombre').remove();
        } 
    }

    //Validamos que el campo marca tenga contenido, si no se muestra un error y se evita el envío del formulario.
    function validarFabricante()
    {
        var contenido = $('#fabricante').val();
        var divError = $('<div id="errorFab">'); 

        if (contenido == "")
        {
            $('#errorFab').remove();
            $(divError).css('color', 'red');
            $(divError).text('Debe introducir un fabricante.');
            $('#formFab').append(divError);
        }

        else
        {
            $('#errorFab').remove();
        } 
    }

    //Validamos que en el campo descripción tenga contenido si no se evitará el envío del formulario.
    function validarDescripcion()
    {
        var contenido = $('#descripcion').val();
        var divError = $('<div id="errorDes">'); 

        if (contenido == "")
        {
            $('#errorDes').remove();
            $(divError).css('color', 'red');
            $(divError).text('Debe introducir una descripción para ayudar a describir el producto.');
            $('#formDes').append(divError);
        }

        else
        {
            $('#errorDes').remove();
        }
    }

    //Comprobamos que el precio tenga valor y la cantidad máxima de decimales sea dos.
    function validarPrecios()
    {
        var contenido = $('#precio').val();
        var divError = $('<div id="errorPrecio">'); 
        var regExp = /^[0-9]+([,\.][0-9]{0,2})?$/;

        if (contenido == "")
        {
            $('#errorPrecio').remove();
            $(divError).css('color', 'red');
            $(divError).text('Debe introducir un precio para el producto.');
            $('#formPrecio').append(divError);
        }

        else if (!regExp.test(contenido))
        {
            $('#errorPrecio').remove();
            $(divError).css('color', 'red');
            $(divError).text('El precio de producto solamente puede contener números y dos decimales');
            $('#formPrecio').append(divError);
        }

        else
        {
            $('#errorPrecio').remove();
        } 
    }

    //Comprobamos que la categoria es valida y cargamos por AJAX el select de subcategorias.
    function validarCategoria()
    {
        var contenido = $('#categoria option:selected').val();
        var divError = $('<div id="errorCat">'); 

        if (contenido == "")
        {
            $('#errorCat').remove();
            $(divError).css('color', 'red');
            $(divError).text('El producto debe pertenecer a una categoria.');
            $('#formCategoria').append(divError);
        }

        else
        {
            $('#errorCat').remove();
        } 

        $('#categoria').on('change', function()
                           {
            $.ajax({
                type: "POST",
                url: "php/obtenerSubCategorias.php",
                data: {"id" : contenido},
                success: function (response) {
                    $('#subcategoria').html(response);
                }
            });
        })
    }

    //Una vez se ha cargado el select mediante AJAX, comprobamos que se introduce una subcategoria valida.
    function validarSubCategoria()
    {
        var contenido = $('#subcategoria option:selected').val();
        var divError = $('<div id="errorSub">'); 

        if (contenido == "")
        {
            $('#errorSub').remove();
            $(divError).css('color', 'red');
            $(divError).text('El producto debe pertenecer a una subcategoria.');
            $('#formSub').append(divError);
        }

        else
        {
            $('#errorSub').remove();
        } 
    }

    //Función que llamará a todas la funciones comprobatorias. Se utilizará a la hora de hacer click en el botón submit.
    function validarFormulario()
    {
        validarNombre();
        validarFabricante();
        validarDescripcion();
        validarPrecios();
        validarCategoria();
        validarSubCategoria();
    }

    //Llamamos a cada una de las funciones una vez se ejecuta el evento blur.
    function validarBlur()
    {
        $('#nombre').blur(function()
                          {
            validarNombre();
        });

        $('#fabricante').blur(function()
                              {
            validarFabricante();
        });

        $('#descripcion').blur(function()
                               {
            validarDescripcion();
        });

        $('#precio').blur(function()
                          {
            validarPrecios();
        });

        $('#categoria').blur(function()
                             {
            validarCategoria();
        });

        $('#subcategoria').blur(function()
                                {
            validarSubCategoria();
        });
    }
});