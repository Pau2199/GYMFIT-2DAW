$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    });
    $('#subCategoriaDiv').hide();
    $('#categoria').blur(function(){
        if($(this).val() ==  'ropa'){
            $('#subCategoriaDiv').show();
        }
        $.ajax({
            url: "/mostrarProductos/"+$(this).val(),
            method: "GET",
            success: function(data){
                $('#agregarElemento').empty();
                console.log(data[0][0]);
                var img = $('<img>').attr({
                    src: "../img/lupa.svg",
                    class: 'lupa',
                    alt: "Lupa"
                }); 
                var td = $('<td>').attr('class', 'lupa');
                td.append(img);
                var tr = $('<tr>').append(td);
                tr.attr('id', 'P'+data[0][0]['id']);
                for(var clave in data[0][0]){
                    if(clave != 'idCategoria' && clave != 'created_at' && clave != 'updated_at' && clave != 'id'){
                        td = $('<td>').html(data[0][0][clave]);
                        td.attr('class', clave);
                        tr.append(td);    
                    }  
                }
                console.log(data[1]);
                td = $('<td>').html(data[1]);
                td.attr('class', 'categoria');
                tr.append(td);
                var img = $('<img>').attr({
                    src: "../img/trash.svg",
                    class: 'papelera',
                    alt: "papelera"
                }); 
                td = $('<td>').attr('class', 'papelera');
                td.append(img);
                tr.append(td);
                $('#agregarElemento').append(tr);
            },
            dataType: "json",
        });
    });

    $('#agregarElemento').on('click', 'img.papelera', function(){
        var padre = $(this).parent().parent();
        padre = padre.attr('id').split('P')[1];
        $.ajax({
            url: 'eliminarProducto/'+ padre,
            method: 'GET',
            success: function(){
                $('#P'+padre).remove();
            }
        });
    })
    $('#agregarElemento').on('click', 'img.lupa', function(){
        var padre = $(this).parent().parent();
        padre = padre.attr('id').split('P')[1];
        $.ajax({
            url: 'obtenerMasInfo/'+padre,
            method: 'GET',
            success: function(data){
                var div = $('<div>').css('width', window.innerWidth);
                div.css('height', window.innerHeight);
                div.attr({
                    class: 'extra',
                    id: 'divMasInfo'
                })
                var i = 0;
                for(var clave in data[0][i]){
                    console.log(data[0][i][clave]);
                    var img = $('<img>').attr({
                        src: '../storage/img/'+data[0][i][clave],
                        alt: 'Imagen'
                    });
                    div.append(img);
                    i++;
                }
                var div2 = $('<div>').css('margin-top', '1%');
                 var span = $('<span>').attr('class', 'quantity');
                        span.html('Cantidad');
                        var input = $('<input>').val(data[1][0].quantity);
                        input.attr('readOnly', '');
                        console.log(data[1][0].id);
                        input.attr('class', 'P'+data[1][0].id)+' quantity';
                        div2.append(span);
                        div2.append(input);
                if(data[1][0].size != null && data[1][0].colour != null){
                    var span = $('<span>').attr('class', 'colour');
                        span.html('Color');
                        var input = $('<input>').val(data[1][0].colour);
                        input.attr('readOnly', '');
                        input.attr('class', 'P'+data[1][0].id+' colour');
                        div2.append(span);
                        div2.append(input);
                    span = $('<span>').attr('class', 'size');
                        span.html('Talla');
                        var input = $('<input>').val(data[1][0].size);
                        input.attr('readOnly', '');
                        input.attr('class', 'P'+data[1][0].id+' size');
                        div2.append(span);
                        div2.append(input);
                }
                div.append(div2);
                $('body').append(div);
            },
            dataType: 'json'
        });

    });
    $('body').on('dblclick', 'div#divMasInfo', function(){
        $(this).remove();
    });
    $('body').on('click', 'div input', function(){
        $(this).removeAttr('readOnly');
        $(this).attr('id', 'modificandoInput');
        $(this).select();
        $(this).focus();
    });
    $('body').on('blur', 'div #modificandoInput', function(){
        console.log($(this).attr('class'));
        var id = $(this).attr('class').split('P')[1].split(' ')[0];
        var columna = $(this).attr('class').split(' ')[1];
        var nuevoDato = $(this).val();
        var td = $(this);
        $.ajax({
            url: 'modificarDatosStock/'+id+'/'+nuevoDato+'/'+columna,
            method: 'GET',
            succes: function(){
                td.html(nuevoDato);
            }
                });
    })


    $('#agregarElemento').on('dblclick', 'td', function(){
        if($(this).attr('class') != 'lupa' && $(this).attr('class') != 'papelera' && $(this).attr('class') != 'categoria'){

            var input = $('<input>').attr({
                id: 'inputGenerado',
                type: 'text'
            });
            input.val($(this).html());
            $(this).html('');
            $(this).append(input);
        }

    });

    $('#agregarElemento').on('blur', '#inputGenerado', function(){
        var id = $(this).parent().parent();
        id = id.attr('id').split('P')[1];
        var td = $(this).parent();
        var columna = $(this).parent().attr('class');
        var nuevoDato = $(this).val();
        $.ajax({
            url: 'modificarProducto/'+id+'/'+columna+'/'+nuevoDato,
            method: 'GET',
            succes: function(){
                td.html(nuevoDato);
            }

        });
    });
});