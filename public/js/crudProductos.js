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

        var request = $.ajax({
            url: "mostrarProductos",
            method: "POST",
            data: {categoria : $(this).val()},
            dataType: "html",
        });
    });
});