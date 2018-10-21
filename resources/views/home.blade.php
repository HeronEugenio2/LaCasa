@extends('template')
@section('conteudo')
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('home.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="{{route('cadastrar.create')}}">Cadastrar Vacinas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled"  >Vacinas Utilizadas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Lista Vacinas</a>
            </li>
        </ul>
    </div>
    <div class="card-body text-center col-8">
        <h5 class="card-title">Lista de Vacinas</h5>
            <table style="width:100%">
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                </tr>
                <tr>
            @foreach($vacinas as $vacina)
                <tr>
                    <td>{{$vacina->nome}}</td>
                    <td>{{$qtd}}</td>
                </tr>
            @endforeach
                </tr>
            </table>
        {{-- <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">
            Tipo 1
            </button>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$vacina->nome}}
                    <span class="badge badge-primary badge-pill">{{$qtd}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Morbi leo risus
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>
            <button type="button" class="list-group-item list-group-item-action active">
            Tipo 2
            </button>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cras justo odio
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Morbi leo risus
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul> --}}
        </div>
    </div>
</div>
@endsection
