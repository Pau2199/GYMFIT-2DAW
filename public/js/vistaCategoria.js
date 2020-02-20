$(function(){
    var numPag=0;
    var categoria = window.location.href
    categoria = categoria.split('/')[4];
    console.log(categoria);
    $('#cargarMasProductos').click(function(){
        numPag++
        $.ajax({
            url:'/categoria/'+categoria+'/'+numPag,
            method: "GET",
            success: function(data){
                console.log(data);
            }
        })
    })    

    $
    $('#anyadirCarrito').click(function(){
        if(localStorage.getItem('productos') != null){
            var id = $(this).parent().attr('id').split('P')[1];
            var dato = localStorage.getItem('productos');
            dato = dato + id;
            localStorage.setItem('productos', dato);
        }else{
            var id = $(this).parent().attr('id').split('P')[1];
            localStorage.setItem('productos', id);

        }
    });
});