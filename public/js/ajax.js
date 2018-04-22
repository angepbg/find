function calcular(vectores, valor){
    var parametros = {
        'vectores' : vectores,
        'valor' : valor,
    };
    $.ajax({
        data:  parametros,
        dataType: 'json',
        url:   'calcular',
        type:  'GET',
        beforeSend: function () {
            $("#resultado").html("Procesando...");
        },
        success:  function (response) {
            $("#resultado").html(response);
        }
    });
};