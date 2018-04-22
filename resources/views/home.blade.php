@extends('body')
@section('titulo', 'COR')

@section('paginas')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


<div class="container">
	
	@for($k=0; $k < 4; $k++)
		@for($i=0; $i < $vectores[$k]->fil; $i++)
			@for($j=0; $j < $vectores[$k]->col; $j++)
				{{ $vectores[$k]->matriz[$i][$j] }}
			@endfor
			<br>
		@endfor
		<br><br>
	@endfor
		
			<div class="row">
				<div class="">
				    <select id="valor" name="valor" onchange="calcular( <?php echo $vectores[.'this.value'.]->fil ?> );">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="0">Option 1</option>
				      <option value="1">Option 2</option>
				      <option value="2">Option 3</option>
				      <option value="3">Option 4</option>
				    </select>
				    <label>Materialize Select</label>
				</div>
			</div>
		Resultado: <span id="resultado"></span>
</div>

<script>  
	$(document).ready(function(){
    $('select').formSelect();
  });
</script>
<script>
        function calcular(vectores){
        	alert("holissss");
        	// alert($vectores);
         //    var parametros = {
         //        'vectores[]' : vectores[]
         //    };
         //    $.ajax({
         //        data:  parametros,
         //        dataType: 'json',
         //        url:   'create',
         //        type:  'GET',
         //        beforeSend: function () {
         //            $("#resultado").html("Procesando...");
         //        },
         //        success:  function (response) {
         //            $("#resultado").html(response);
         //        }
         //    });
        };
    </script>
@endsection