$(function(){

    var precio = localStorage.getItem('total');
    console.log(precio);

    $('#aceptarPago').click(function(){
        var inputVacio = false;
        var input = $('input');
        input.each(function(){
            if($(this).val() == ""){
                inputVacio = true;
            }
        })

        if(inputVacio == false){
            alert('Compra realizada con exito!');

        }
    })

});