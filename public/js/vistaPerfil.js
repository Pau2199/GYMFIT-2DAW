$(function(){

    $('#guardarDatos').hide();

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
            $('#apellidosPerfil').val(data[0].firts_surname+" "+data[0].second_surname);
            $('#correoPerfil').val(data[0].email);
            $('#fechPerfil').val(data[0].date_birth);
            $('#type_way').val(data[1][0].type_way);
            $('#name').val(data[1][0].name);
            $('#number').val(data[1][0].number);
            $('#door').val(data[1][0].door);
            $('#floo').val(data[1][0].floo);
            $('#country').val(data[1][0].country);
            $('#location').val(data[1][0].location);
            $('#postal_code').val(data[1][0].postal_code);

            for(var i=0 ; i<data[2].length ; i++){

                var div0 = $('<div>').addClass('col-lg-7 col-md-7 col-sm-12 col-12 my-4 p-4 borde');
                var div1 = $('<div>').addClass('form-row justify-content-between');
                var padre = $('.padre');
                console.log(padre);
                var div2 = $('<div>').addClass('form-group col-md-4');
                var label1 = $('<label>').addClass('font-weight-bold').attr('for','idPedido').html('Id del Pedido');
                var input1 = $('<input>').attr({type:'text', id:'idPedido'+i,readonly:'readonly'}).addClass('form-control').val(data[2][i].id);

                padre.append(div0);
                div0.append(div1);
                div1.append(div2);
                div2.append(label1);
                div2.append(input1);

                var div3 = $('<div>').addClass('form-group col-md-4');
                var label2 = $('<label>').addClass('font-weight-bold').attr('for','fechaPedido').html('Fecha del Pedido');
                var input2 = $('<input>').attr({type:'date', id:'fechaPedido'+i, readonly:'readonly'}).addClass('form-control').val(data[2][i].order_date);

                div1.append(div3);
                div3.append(label2);
                div3.append(input2);

                var div4 = $('<div>').addClass('form-row justify-content-between');
                var div5 = $('<div>').addClass('form-group col-md-4');
                var label3 = $('<label>').addClass('font-weight-bold').attr('for','metodoPedido').html('Metodo de Pago');
                var input3 = $('<input>').attr({type:'text', id:'metodoPedido'+i, readonly:'readonly'}).addClass('form-control').val(data[2][i].payment_methos);

                div0.append(div4);
                div4.append(div5);
                div5.append(label3);
                div5.append(input3);


                var div6 = $('<div>').addClass('form-group col-md-4');
                var label4 = $('<label>').addClass('font-weight-bold').attr('for','precioPedido').html('Precio Total');
                var input4 = $('<input>').attr({type:'text', id:'precioPedido'+i, readonly:'readonly'}).addClass('form-control').val(data[2][i].full_price);

                div4.append(div6);
                div6.append(label4);
                div6.append(input4);

            }

        },
        dataType: "json",
    });



    $('#modificarDatos').click(function(){
        console.log('prueba')
        var input = $('input.readonly');
        for(var i = 0 ; i<input.length ; i++){
            input.removeAttr('readonly');
        };
        $(this).hide();
        var input = $('input');
        input.each(function(){
            if($(this).html() == ""){
                
            }
        })
        $('#guardarDatos').show();
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
        var apellido1 =  $('#apellidosPerfil').val().split(" ")[0];
        var apellido2 =  $('#apellidosPerfil').val().split(" ")[1];
        arrayJson = {via: $('#type_way').val() , nombreVia: $('#name').val() , numero : $('#number').val() , puerta : $('#door').val() , piso : $('#floo').val() , provincia : $('#country').val() , localidad :  $('#location').val() , cp : $('#postal_code').val() , nombre:  $('#nombrePerfil').val() , apellido1: apellido1 , apellido2 : apellido2 , email :   $('#correoPerfil').val() , fecha : $('#fechPerfil').val()}

        arrayJson = JSON.stringify(arrayJson);

        console.log(inputvacio);

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

    $('input').blur(function(){
        var datoNuevo = $(this).val();
        var columna = $(this).attr('id');
        $.ajax({
            url: "/perfil/modificar/"+datoNuevo+"/"+columna,
            method: "GET",          
        });
    })


});