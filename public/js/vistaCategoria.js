$(function(){
    var numPag=-1;
    var categoria = window.location.href
    categoria = categoria.split('/')[4];
    cargarProductos(categoria, numPag);
    function cargarProductos(categoria, numPag){
        numPag++;
        $.ajax({
            url: '/categoria/{category}/'+numPag,  
            method: "GET",
            succes: function(data){
                
            }
        });

    }
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