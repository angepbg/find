@extends('body')
@section('titulo', 'COR')

@section('paginas')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<div class="container">
	<div class="row">
	@for($k=0; $k < 4; $k++)
		<div class="col s12 m3">
			<h4>Opción {{$k+1}}</h4>
			<table class="striped">
				<tbody>
				@for($i=0; $i < $vectores[$k]->fil; $i++)
					<tr>
					@for($j=0; $j < $vectores[$k]->col; $j++)
						<td>
						{{ $vectores[$k]->matriz[$i][$j] }}
						</td>
					@endfor
					</tr>
				@endfor
				</tbody>
			</table>
		</div>
	@endfor
	</div>	
	<div class="row">
	    <select id="valor" name="valor"  onchange="calcular({{ json_encode($vectores) }}, this.value);">
	      <option value="" disabled selected>Seleccione la sopa de letras</option>
	      <option value="0">Opción 1</option>
	      <option value="1">Opción 2</option>
	      <option value="2">Opción 3</option>
	      <option value="3">Opción 4</option>
	    </select>
	</div>
	Resultado: <span id="resultado"></span>
</div>
<script>  
	$(document).ready(function(){
    $('select').formSelect();
  });
</script>
<script>
    function calcular(vectores, valor){
    	
        var parametros = {
            'vectores' : vectores,
            'valor' : valor,
        };
        $.ajax({
            data:  parametros,
            dataType: 'json',
            url:   'create',
            type:  'GET',
            beforeSend: function () {
                $("#resultado").html("Procesando...");
            },
            success:  function (response) {
                $("#resultado").html(response);
            }
        });
    };
</script>
@endsection