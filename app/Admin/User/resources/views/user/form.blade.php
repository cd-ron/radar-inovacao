@extends('admin.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('admin.user.index') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-arrow-left"></i> Voltar</a>
            <h4 class="card-title" style="padding-left: 15px;">Usuários</h4>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-block">
                    @if(isset($user))
                        <h4 class="card-title">Editar usuário</h4>
                        {!! Form::model($user, ['route' => ['admin.user.update', $user->id], 'method' => 'put']) !!}
                    @else
                        <h4 class="card-title">Criar usuário</h4>
                        {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['admin.user.store']]) !!}
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::openGroup('roles_id', 'Papel') !!}
                            {!! Form::select('roles_id', $role) !!}
                            {!! Form::closeGroup() !!}
                        </div>
                        <div class="col-lg-6">
                            {!! Form::openGroup('name', 'Nome') !!}
                            {!! Form::text('name') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::openGroup('email', 'E-mail') !!}
                            {!! Form::text('email') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                        <div class="col-lg-6">
                            {!! Form::openGroup('password', 'Senha') !!}
                            {!! Form::password('password') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="form-actions" align="right">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('#zipcode').focusout(function() {
            var zipcode = $('#zipcode').val();
            zipcode = zipcode.replace(/\.|\-/g, '');

            $.ajax({
                type: 'get',
                url:'https://viacep.com.br/ws/'+ zipcode +'/json/',
                success: function(retorno){
                    $('#address').val(retorno.logradouro);
                    $('#neighborhood').val(retorno.bairro);
                    $('#city').val(retorno.localidade);
                    $("#state_id option:contains("+ retorno.uf +")").prop("selected", "selected");
                }
            })
        })
    </script>
@stop