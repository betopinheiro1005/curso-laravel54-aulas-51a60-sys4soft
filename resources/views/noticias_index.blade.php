{{-- Página inicial - Apresenta as notícias visíveis --}}

@extends('layouts.app')

@section('conteudo')
	@if (count($dados)==0)
		{{-- Não existem notícias --}}
		<p class="alert alert-danger text-center">Não foram encontradas notícias</p>
	@else
		{{-- Apresentar as notícias existentes na base de dados --}}

		@php
			$total = 0;
		@endphp


		@foreach ($dados as $noticia)

			{{-- Verifica se a notícia está visível --}}
			@if ($noticia->visivel == 1)
				{{-- Cabeçalho da notícia (título, autor, updated_at) --}}

				<div class="row bg-info">
					<div class="col-md-9">
						{{-- Título --}}
						<h2>
							{{$noticia->titulo}}	
						</h2>
					</div>
					<div class="col-md-3 text-right" style="padding-top: 10px;">
						{{-- Autor e hora de atualização --}}
						<span class="glyphicon glyphicon-pencil"></span> {{$noticia->autor}} 
						<span class="glyphicon glyphicon-time"></span> {{$noticia->updated_at->diffForHumans()}}	
					</div>
				</div>

				{{-- Corpo da notícia) --}}
				<div class="row">
					<div class="col-md-12" style="padding-top: 5px;">
						{{$noticia->texto}}
					</div>
				</div>

				{{-- Separador --}}
				<hr>

				{{-- Atualização das notícias apresentadas --}}
				@php
					$total++;
				@endphp

			@endif

							
		@endforeach

		{{-- Apresenta o número de notícias visíveis --}}

		<div class="row">
			<div class="col-md-12 text-right">
				<p>Nº total de notícias: {{$total}}</p>
			</div>
		</div>


		


	@endif
@endsection
