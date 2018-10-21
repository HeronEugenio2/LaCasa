@extends('template.template')
@section('conteudo')

<hr>
<div class="container ">
    <table class=" table table-hover">
    <thead style="background-color: white" align="center">
    <tr>
      <th scope="col">Logo</th>
      <th scope="col">República</th>
      <th scope="col">Vagas</th>
      <th scope="col">Qtd Membros</th>
      <th scope="col">Tipo</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody align="center" style="background-color: white">
    <tr>
      <th scope="row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZERYKS12qZGX9dbSsH-xeLvMrmXiI1XgWbke8EGjYruMFxyZT" height="50" width="50"></th>
      <td>CosaNostra</td>
      <td><span class="badge badge-pill badge-primary">1</span></td>
      <td>3</td>
      <td>Masculina</td>
      <td style="color: green"><span class="badge badge-pill badge-danger">Offline</span></td>
    </tr>
    <tr>
      <th scope="row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcWizaATSb2ANctViUbdfC_JwjTXo9pXqiCi_ZzoA5cuzQMT3-" height="50" width="50"></th>
      <td>Barber</td>
      <td><span class="badge badge-pill badge-primary">2</span></td>
      <td>3</td>
      <td>Feminina</td>
      <td style="color: green"><span class="badge badge-pill badge-danger">Offline</span></td>
    </tr>
    <tr>
      <th scope="row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQB2wYrj1tZ-kI9o6k5T9Y2oJeVMs1bvVUv-Oiks2Vu3jdPZZF0" height="50" width="50"></th>
      <td>UHUL</td>
      <td><span class="badge badge-pill badge-danger">0</span></td>
      <td>3</td>
      <td>Masculina</td>
      <td style="color: red"><span class="badge badge-pill badge-success">Online</span></td>
    </tr>
    <tr>
      <th scope="row"><img src="http://www.fainor.com.br/v2/wp-content/uploads/2018/05/BRAS%C3%83O_OKOKOK.png" height="50" width="50"></th>
      <td>Fainor</td>
      <td><span class="badge badge-pill badge-primary">1</span></td>
      <td>3</td>
      <td>Masculina</td>
      <td style="color: red"><span class="badge badge-pill badge-danger">Offline</span></td>
    </tr>
  </tbody>
</table>
</div>
</hr>
@endsection
