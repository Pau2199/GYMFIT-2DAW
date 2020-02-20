$(function(){
    $('#color').hide();
    $('#talla').hide()
    $('#subCategory').hide();

    $('#category').change(function(){
        if($(this).val() == 'Ropa'){
            $('#color').show();
            $('#talla').show();
            $('#subCategory').show();
        }
    })
})