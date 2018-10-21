@extends('template.template')
@section('conteudo')



<hr>
<div class="container bootstrap snippet"  style="background-color: white; padding-top: 20px; margin-bottom: 40px;">
    <div class="row">
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.fainor.com.br/v2/wp-content/uploads/2018/05/BRAS%C3%83O_OKOKOK.png" height="100" width="120"></a></div>
        <div class="col-sm-10"><font face="magneto" size="10">Fainor</font></div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <img src="http://www.fainor.com.br/v2/wp-content/uploads/2018/05/BRAS%C3%83O_OKOKOK.png" class="avatar img-circle img-thumbnail" height="200" width="200" alt="avatar">
                <h6>Escolha uma logo diferente</h6>
                <input type="file">
            </div>
            <br>
        <div class="col-sm-12" >
            <div class="tab-content" >
                <div class="tab-pane active" id="home"><hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>República</h4></label>
                                <input required  type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input required type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label><h4>Email</h4></label>
                                <input required type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label><h4>Endereço</h4></label>
                                <input required type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="***********" title="enter your password.">
                            </div>
                        </div>
                        <hr>
                        <br>
                        <button class="btn btn-lg btn-success" type="submit" style="margin-bottom:  10px;"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
                        <button class="btn btn-lg" type="reset" style="margin-bottom: 10px;"><i class="glyphicon glyphicon-repeat"></i> Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

