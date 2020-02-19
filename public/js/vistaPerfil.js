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
            $('#nombrePerfil').val(data.name);
            $('#apellidosPerfil').val(data.firts_surname+" "+data.second_surname);
            $('#correoPerfil').val(data.email);
            $('#fechPerfil').val(data.date_birth);
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

        console.log(arrayJson);

        if(!inputvacio){
            $.ajax({
                url: "/perfil/rellenarDireccion/"+arrayJson,
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