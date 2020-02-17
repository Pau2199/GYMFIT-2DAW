$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 
    $('#subCategoriaDiv').hide();

    $('#categoria').blur(function(){
        if($(this).val() == 'Ropa'){
            $('#subCategoriaDiv').show();
        };

        var request = $.ajax({
            url: "/mostrarProductos/"+$(this).val(),
            method: "GET",
            success: function(data){
                                console.log(data);
                var td;
                for(var i = 0 ; i<data.length ; i++){
                    var tr = $('<tr>');
                    $('#agregarElemento').append(tr);
                    //                    console.log(data[i]);
                    var imgLupa = $('<img>').attr({
                        src: "../img/lupa.svg",
                        alt: "Lupa"
                    });
                    td = $('<td>');
                    tr.append(td);
                    td.append(imgLupa);
                    for(var clave in data[i]){
                        td = $('<td>');
                        tr.append(td);
                        td.html(data[i][clave]);
                        //                        console.log(data[i][clave]);
                    }
                    var img = $('<img>').attr({
                        src: "../img/trash.svg",
                        alt: "Papelera"
                    });
                    td = $('<td>');
                    tr.append(td);
                    td.append(img);
                }
            },
            dataType: "json",
        });
    });
});