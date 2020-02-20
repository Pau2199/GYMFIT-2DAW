$(function(){
    var numPag=1;
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
                    for(var i=0 ; i<data.length ; i++){
                        var div0 = $('<div>').addClass('col-md-4');
                        var div1 = $('<div>').addClass('card mb-4 box-shadow');
                        var img = $('<img>').attr({ src : '/storage/img/'+data[i]['img'][0]['ruta'] , alt : 'imagen'+i}).addClass('card-img-top');
                        var div2 = $('<div>').addClass('card-body');
                        var p = $('<p>').addClass('card-text').html(data[i]['description']);
                        var div3 = $('<div>').addClass('d-flex justify-content-between align-items-center');
                        var div4 = $('<div>').attr('id','P'+data[i]['id']).addClass('btn-group text-center');
                        var span = $('<span>').addClass('btn btn-info anyadirCarrito').html('Comprar');

                        $('.padre').append(div0);
                        div0.append(div1);
                        div1.append(img);
                        div1.append(div2);
                        div2.append(p);
                        div2.append(div3);
                        div3.append(div4);
                        div3.append(span);

                    }
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