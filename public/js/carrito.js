$(function(){

    var array = localStorage.getItem('productos');
    console.log(array);

    var ids = array.split(',');
    console.log(ids);

    $.ajax({
        url: "/carrito/mostrar/"+ids,
        method: "GET",
        success: function(data){
            console.log(data);
            var total=5.99;
            for(var i=0 ; i<data.length ; i++){

                total += data[i].price;

                var tr1 = $('<tr>').attr('id','precio'+i);
                var td1 = $('<td>').html(data[i].name);
                var td2 = $('<td>');
                var input = $('<input>').addClass('form-control text-center').attr('type' , 'number').val(1);
                var td3 = $('<td>').addClass('text-right').html(data[i].price);
                var td4 = $('<td>').addClass('text-right');
                var span = $('<span>').addClass('btn');
                var img = $('<img>').attr('src','../img/trash.svg').attr('alt','basura').addClass('basura');

                $('tbody').append(tr1);
                tr1.append(td1);
                td2.append(input);
                tr1.append(td2);
                tr1.append(td3);
                span.append(img);
                td4.append(span);
                tr1.append(td4);



            }
            total = total.toFixed(2);
            var tr2 = $('<tr>');
            var td5 = $('<td>');
            var td6 = $('<td>');
            var td7 = $('<td>').html('Envio');
            var td8 = $('<td>').html('5.99€').addClass('text-right');

            $('tbody').append(tr2);
            tr2.append(td5);
            tr2.append(td6);
            tr2.append(td7);
            tr2.append(td8);

            var tr3 = $('<tr>');
            var td9 = $('<td>');
            var td10 = $('<td>');
            var td11 = $('<td>').html('Total').addClass('font-weight-bold');
            var td12 = $('<td>').html(total+'€').addClass('text-right').attr('id','precioTotal');

            $('tbody').append(tr3);
            tr3.append(td9);
            tr3.append(td10);
            tr3.append(td11);
            tr3.append(td12);

        },                
    });

    $('body').on('click','img.basura',function(){
        var padre = $(this).parent().parent().parent();
        var id = padre.attr('id');
        padre.remove(); 

    });

    $('.pago').click(function(){
        var precio = $('#precioTotal').html().split('€')[0];
        console.log(precio);
        localStorage.setItem('total',precio);
//    

    });



});