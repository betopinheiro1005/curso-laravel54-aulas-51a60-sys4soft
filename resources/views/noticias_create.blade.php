@extends('layouts.app')

@section('conteudo')

	{{-- Apresenta o formulário para criação de nova notícia --}}

	<form method="POST" action="/salvar_noticia">
		
		{{-- csrf --}}
		{{csrf_field()}}

		<h1>Nova notícia</h1>	

		{{-- Título da notícia --}}
		<div class="form-group">
			<label for="titulo">Título: </label>
			<input type="text" class="form-control" name="text_titulo" id="titulo" placeholder="Título" required>
		</div>

		{{-- Texto da notícia --}}
		<div class="form-group">
			<label for="texto">Texto da notícia: </label>
			<textarea class="form-control" name="text_texto" id="texto" placeholder="Texto da notícia" rows="5" required></textarea>
		</div>

		{{-- Autor da notícia --}}
		<div class="form-group">
			<label for="autor">Autor: </label>
			<input type="text" class="form-control" name="text_autor" id="autor" placeholder="Autor" required>
		</div>

		{{-- Visibilidade da notícia --}}

		<div class="form-group text-center">
			<input type="checkbox" name="check_visivel" checked> Notícia visível	
		</div>
		
		<div class="text-center">
			<button class="btn btn-primary" role="submit">Salvar</button>
		</div>

	</form>
	
@endsection