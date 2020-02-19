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
//        $(this).preventDefault();
        var input = $('input');
        for(var i = 0 ; i<input.length ; i++){
            console.log(input);
           input[i].removeClass("readOnly");;
        };
        $(this).hide();
        $('#guardarDatos').show();
    })

    $('#guardarDatos').click(function(){
        $(this).preventDefault();
        console.log($(this).val());
    });


});