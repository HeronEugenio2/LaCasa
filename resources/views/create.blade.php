@extends('template')
@section('conteudo')
<h1>Cadastro de itens:</h1>

@if(isset($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		<p>
			{{$error}}
		</p>
		@endforeach
	</div>
@endif


@if(isset($encontroRV))
<form class="form" method="post" action="{{route('itens.update', $encontroRV->id)}}">
{!! method_field('PUT') !!}
@else
<form class="form" method="post" action="{{route('itens.store')}}">
@endif


{!! csrf_field() !!}

  <div class="form-group btn-m">
  	<label>Nome:</label>
  	<input type="text" name="nome" class="form-control" placeholder="Nome" value="{{$encontroRV->nome or old('nome')}}">
  </div>

  <button type="submit" class="btn btn-primary btn-m">
  	Enviar	
  </button>

  <button class="btn btn-default btn-m">Limpar</button>

  <a href="{{Route('itens.index')}}"class="btn btn-default btn-m" >Voltar</a>

</form>

@endsection