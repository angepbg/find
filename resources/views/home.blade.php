@extends('body')
@section('titulo', 'COR')

@section('paginas')
	@for($k=0; $k < 4; $k++)
		@for($i=0; $i < $vectores[$k]->fil; $i++)
			@for($j=0; $j < $vectores[$k]->col; $j++)
				{{ $vectores[$k]->matriz[$i][$j] }}
			@endfor
			<br>
		@endfor
		<br><br>
	@endfor
@endsection