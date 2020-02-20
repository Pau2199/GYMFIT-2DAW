$(function(){
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
    })
});