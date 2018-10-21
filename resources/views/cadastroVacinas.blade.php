@extends('template')
@section('conteudo')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link  " href="{{route('home.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('cadastrar.index')}}">Cadastrar Vacinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Vacinas Utilizadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Lista Vacinas</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <br>
        <div class="card-header text-center">
            <h4>Cadastro de Vacinas</h4>
        </div>
        <br>
        <form class="needs-validation">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-body">
                        <label >Nome:</label>
                        <input type="text" class="form-control" name="nome" required>
                        <label>Descrição:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-body">
                        <label>Tipo:</label>
                        <input type="text" class="form-control" name="nome" required>
                        <label>Vencimento:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mb-2">Salvar</button>
        </form>
    </div>

@endsection
