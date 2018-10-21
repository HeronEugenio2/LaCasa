@extends('template')
@section('conteudo')
{{-- ===================================MENU====================================== --}}
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="container ">
        <form class="col-6">
            <div class="form-group ">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Manter conectado</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            <button type="submit" class="btn btn-primary">Login com Facebook</button>
            <button type="submit" class="btn btn-danger">Login com Google</button>
    </div>
  </div>
</div>
{{-- ============================================================================= --}}

@endsection

