(function($){
    $('#categoria-productos').change(function(){
        //alert('funciona');
        $.ajax({
            url: pg.ajaxurl,
            method: "POST",
            data: {
                "action":"pgFiltroProductos" ,
                "categoria": $(this).find(':selected').val()
            },
            beforeSend: function(){
                $('#resultado-producto').html("cargando...")
            },
            success: function(data){
                let html = "";
                data.forEach(item => {
                    html += `<div class = "col-4 my-3">
                    <figure>${item.imagen}</figure>
                    <h4 class="text-center my-2"><a href="${item.link}">${item.titulo}</a>
                    </h4></div>` 

                })
                $('#resultado-producto').html(html)        

            },
            error: function(error){
                console.log(error)
            }
        })
    })

    // ajax query

    $(document).ready(function(){
        //alert('funciona');
        $.ajax({
            url: pg.apiurl+"novedades/3",
            method: "GET",
            data: {
                "action":"pgFiltroProductos" ,
                "categoria": $(this).find(':selected').val()
            },
            beforeSend: function(){
                $('#resultado-novedades').html("cargando...")
            },
            success: function(data){
                let html = "";
                data.forEach(item => {
                    html += `<div class = "col-4 my-3">
                    <figure>${item.imagen}</figure>
                    <h4 class="text-center my-2"><a href="${item.link}">${item.titulo}</a>
                    </h4></div>` 

                })
                $('#resultado-novedades').html(html)        

            },
            error: function(error){
                console.log(error)
            }
        })
    })



})(jQuery);