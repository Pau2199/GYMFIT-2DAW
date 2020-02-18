$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 
    $('#subCategoriaDiv').css('display', 'none');

    $('#categoria').blur(function(){
        if($(this).val() == 'Ropa'){
            $('#subCategoriaDiv').css('display', 'block');
        };

        $.ajax({
            url: "/mostrarProductos/"+$(this).val(),
            method: "GET",
            success: function(data){
                $('#agregarElemento').empty();
                var td;
                var id;
                for(var i = 0 ; i<data.length ; i++){
                    var tr = $('<tr>');
                    $('#agregarElemento').append(tr);
                    //                    console.log(data[i]);
                    var imgLupa = $('<img>').attr({
                        src: "../img/lupa.svg",
                        class: 'lupa',
                        alt: "Lupa"
                    });
                    td = $('<td>').attr('class', 'lupa');
                    tr.append(td);
                    td.append(imgLupa);
                    for(var clave in data[i]){
                        id = data[i][clave];
                        td = $('<td>');
                        tr.append(td);
                        td.html(data[i][clave]);
                        //                        console.log(data[i][clave]);
                    }
                    td = $('<td>');
                    td = $('<td>').attr('class', 'vacio');
                    tr.append(td);
                    var img = $('<img>').attr({
                        src: "../img/trash.svg",
                        class: 'papelera',
                        id: id,
                        alt: "papelera"
                    });
                    td = $('<td>');
                    td = $('<td>').attr('class', 'papelera');
                    tr.append(td);
                    tr.attr('id', 'P'+id);
                    td.append(img);
                }
            },
            dataType: "json",
        });
    });

    $('#agregarElemento').on('click', 'img.papelera', function(){
        var padre = $(this).parent().parent();
        console.log(padre);
        padre = padre.split('P')[1];
        $.ajax({
            url: 'eliminarProducto/'+ padre,
            method: 'GET',
            success: function(){
                padre.remove();
            }
        });
    })
    $('#agregarElemento').on('click', 'img.lupa', function(){
        var padre = $(this).parent().parent();
        console.log(padre);
        padre = padre.attr('id').split('P')[1];
        $.ajax({
            url: 'obtenerImagenes/'+padre,
            method: 'GET',
            success: function(data){
                console.log(data);
                var img = $('<img>').attr({
                    src: '../storage/img/'+data[0].ruta,
                    alt: 'prueba'
                })
                var div = $('<div>').css('width', window.innerWidth);
                div.css('height', window.innerHeight);
                div.attr({
                    class: 'extra',
                    id: 'divImagenes'
                })
                div.append(img);
                $('body').append(div);
            },
            dataType: 'json'
        });

    });

    $('#agregarElemento').on('dblclick', 'td', function(){
        if($(this).attr('class') != 'lupa' && $(this).attr('class') != 'vacio' && $(this).attr('class') != 'papelera'){
            var input = $('<input>').attr({
                id: 'inputGenerado',
                type: 'text'
            });
            input.val($(this).html());
            $(this).html('');
            input.focus();
            $(this).append(input);
        }

    });

    $('#agregarElemento').on('blur', '#inputGenerado', function(){
        $.ajax({
            url: 'ModificarProducto'

        })
        $(this).remove();
    })
});