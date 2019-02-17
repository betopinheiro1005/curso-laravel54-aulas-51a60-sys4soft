@extends('layouts.app')

@section('conteudo')

	{{-- Apresenta o formulário para editar uma notícia --}}

	<form method="POST" action="/atualizar_noticia/{{$noticia->id_noticia}}">
		
		{{-- csrf --}}
		{{csrf_field()}}

		<h1>Editar notícia</h1>	

		{{-- Título da notícia --}}
		<div class="form-group">
			<label for="titulo">Título: </label>
			<input type="text" class="form-control" name="text_titulo" id="titulo" value="{{$noticia->titulo}}" required>
		</div>

		{{-- Texto da notícia --}}
		<div class="form-group">
			<label for="texto">Texto da notícia: </label>
			<textarea class="form-control" name="text_texto" id="texto" rows="5" required>{{$noticia->texto}}</textarea>
		</div>

		{{-- Autor da notícia --}}
		<div class="form-group">
			<label for="autor">Autor: </label>
			<input type="text" class="form-control" name="text_autor" id="autor" value="{{$noticia->autor}}" required>
		</div>

		{{-- Visibilidade da notícia --}}
		<div class="form-group text-center">
			@if ($noticia->visivel == 1)
					<input type="checkbox" name="check_visivel" checked> Notícia visível	
			@else
					<input type="checkbox" name="check_visivel"> Notícia visível	
			@endif
		</div>
		
		{{-- Atualizar --}}
		<div class="text-center">
			<button class="btn btn-primary" role="submit">Atualizar</button>
		</div>

	</form>
	
@endsection