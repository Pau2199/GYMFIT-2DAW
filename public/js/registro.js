$(function(){
    $('#capchar').blur(function(){
        var texto = $(this).val();
        $.ajax({
            url: '../img/comprobarCapchar.php',
            method: 'GET',
            data: {texto: texto},
            success: function(data){
                console.log(data);
            },
            dataType: 'json'
        });
    })
})
