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

});