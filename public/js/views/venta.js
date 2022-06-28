$(document).ready(function(){
    var listaProductos = [];

    $.ajax({
		type: 'POST',
        url: 'traer-productos',
        dataType: "JSON",data:{
            _token: $('input[name="_token"]').val()
        }
	}).done(function(respuesta){
        for (var i = 0; i < 10; i++) {
            listaProductos.push({ respuesta
                                })
    
        }
        $('.productos-carrito').val(JSON.stringify(listaProductos));
    });
    
});