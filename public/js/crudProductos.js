$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 
    $('#subCategoriaDiv').css('display', 'none');

    $('#categoria').blur(function(){
        if($(this).val() == 'Ropa'){
            $('#subCategoriaDiv').show();
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
                    td = $('<td>');
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
                    tr.append(td);
                    var img = $('<img>').attr({
                        src: "../img/trash.svg",
                        class: 'papelera',
                        id: id,
                        alt: "papelera"
                    });
                    td = $('<td>');
                    tr.append(td);
                    td.append(img);
                }
            },
            dataType: "json",
        });
    });

    $('#agregarElemento').on('click', 'img.papelera', function(){
        var padre = $(this).parent().parent();
        $.ajax({
            url: 'eliminarProducto/'+ $(this).attr('id'),
            method: 'GET',
            success: function(){
                padre.remove();
            }
        });
    })

});