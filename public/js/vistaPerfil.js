$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 
    $.ajax({
        url: "/perfil/rellenarPerfil",
        method: "GET",
        success: function(data){
            console.log(data)
            $('#nombrePerfil').val(data[0].name);
            $('#apellidosPerfil').val(data[0].firts_surname+" "+data.second_surname);
            $('#correoPerfil').val(data[0].email);
            $('#fechPerfil').val(data[0].date_birth);
            $('#viaPerfil').val(data[1][0].type_way);
            $('#nomViaPerfil').val(data[1][0].name);
            $('#numeroPerfil').val(data[1][0].number);
            $('#puertaPerfil').val(data[1][0].door);
            $('#pisoPerfil').val(data[1][0].floo);
            $('#provinciaPerfil').val(data[1][0].country);
            $('#localidadPerfil').val(data[1][0].location);
            $('#cpostalPerfil').val(data[1][0].postal_code);

            for(var i=0 ; i<data[2].length ; i++){

                var div0 = $('<div>').addClass('col-lg-7 col-md-7 col-sm-12 col-12 my-4 p-4 borde');
                var div1 = $('<div>').addClass('form-row justify-content-between');
                var padre = $('.padre');
                console.log(padre);
                var div2 = $('<div>').addClass('form-group col-md-4');
                var label1 = $('<label>').addClass('font-weight-bold').attr('for','idPedido').html('Id del Pedido');
                var input1 = $('<input>').attr({type:'text', id:'idPedido',readonly:'readonly'}).addClass('form-control').val(data[2][i].id);

                padre.append(div0);
                div0.append(div1);
                div1.append(div2);
                div2.append(label1);
                div2.append(input1);

                var div3 = $('<div>').addClass('form-group col-md-4');
                var label2 = $('<label>').addClass('font-weight-bold').attr('for','fechaPedido').html('Fecha del Pedido');
                var input2 = $('<input>').attr({type:'date', id:'fechaPedido', readonly:'readonly'}).addClass('form-control').val(data[2][i].order_date);

                div1.append(div3);
                div3.append(label2);
                div3.append(input2);

                var div4 = $('<div>').addClass('form-row justify-content-between');
                var div5 = $('<div>').addClass('form-group col-md-4');
                var label3 = $('<label>').addClass('font-weight-bold').attr('for','metodoPedido').html('Metodo de Pago');
                var input3 = $('<input>').attr({type:'text', id:'metodoPedido', readonly:'readonly'}).addClass('form-control').val(data[2][i].payment_methos);

                div0.append(div4);
                div4.append(div5);
                div5.append(label3);
                div5.append(input3);


                var div6 = $('<div>').addClass('form-group col-md-4');
                var label4 = $('<label>').addClass('font-weight-bold').attr('for','precioPedido').html('Precio Total');
                var input4 = $('<input>').attr({type:'text', id:'precioPedido', readonly:'readonly'}).addClass('form-control').val(data[2][i].full_price);

                div4.append(div6);
                div6.append(label4);
                div6.append(input4);

            }

        },
        dataType: "json",
    });



    $('#modificarDatos').click(function(){
        var input = $('input.readonly');
        for(var i = 0 ; i<input.length ; i++){
            input.removeAttr('readonly');
        };
        $(this).hide();
        $('#guardarDatos').removeClass('d-none');
    });

    $('#guardarDatos').click(function(){
        var inputvacio = false;
        var input = $('input.readonly');
        var arrayJson;
        input.each(function(){
            if($(this).val() == "" && (($(this).attr('id') != "puertaPerfil") && ($(this).attr('id') != "pisoPerfil")) ){
                inputvacio = true;
            }
        });

        arrayJson = {via: $('#viaPerfil').val() , nombreVia: $('#nomViaPerfil').val() , numero : $('#numeroPerfil').val() , puerta : $('#puertaPerfil').val() , piso : $('#pisoPerfil').val() , provincia : $('#provinciaPerfil').val() , localidad :  $('#localidadPerfil').val() , cp : $('#cpostalPerfil').val()}

        arrayJson = JSON.stringify(arrayJson);


        if(!inputvacio){
            $.ajax({
                url: "/perfil/crearDireccion/"+arrayJson,
                method: "GET",
                success: function(data){
                    $('#guardarDatos').hide();
                    $('#modificarDatos').show();
                    var input = $('input.readonly');
                    for(var i = 0 ; i<input.length ; i++){
                        input.attr('readonly','readonly');
                    };
                },                
            });
        }

    });


});