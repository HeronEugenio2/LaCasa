@extends('template')
@section('conteudo')

<div  class="container container-fluid">

<h1 class="tituloForm">Lista de itens :</h1>

<a href="{{route('itens.create')}}" class="btn btn-primary btn-m"><span  class="glyphicon glyphicon-plus"></span>Cadastrar</a>
	
<table  class="table table-striped ">
	<tr>
		<th>ID:</th>
		<th>NOME:</th>
		<th>AÇÕES:</th>
	</tr>
	@foreach($VaiPraView as $i)
	<tr>
		<td>{{$i->id}}</td>
		<td>{{$i->nome}}</td>
		<td>
			<a href="{{route('itens.edit', $i->id)}}" class="action">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			
			
			<form action="{{ route('itens.destroy', $i->id) }}" class="form-horizontal" method="post" style="display: inline-block">
				{!! method_field('DELETE') !!}
        		{!! csrf_field() !!}
        		<input type="submit" value="remover"  class="btn btn-xs btn-default">
			</form>
			
		</td>	
	</tr>
	@endforeach
</table>
	
</div>




