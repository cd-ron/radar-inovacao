<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CinA - CMS</title>

        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a><b>CiA</b> CMS</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Insira os dados para registrar</p>
                {!! Form::open(['id'=> 'formRegister', 'method' => 'post', 'autocomplete' => 'false' ,'route' => ['register']]) !!}
                @if(isset($user))
                    <input type="hidden" value="{{$user->id}}" name="auth_id">
                @endif
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('user_type_id', 'Tipo de Usuário') !!}
                        {!! Form::select('user_type_id', $user_type, null, array('required' => 'required')) !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('company', 'Empresa') !!}
                        {!! Form::text('company', null, array('required' => 'required')) !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('name', 'Nome') !!}
                        @if(isset($user->email))
                            {!! Form::text('name',  $user->name, array('required' => 'required')) !!}
                        @else
                            {!! Form::text('name', null, array('required' => 'required')) !!}
                        @endif
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('email', 'E-mail') !!}
                        @if(isset($user->email))
                            {!! Form::text('email', $user->email, array('required' => 'required')) !!}
                        @else
                            {!! Form::text('email', null, array('required' => 'required')) !!}
                        @endif
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('password', 'Senha') !!}
                        {!! Form::password('password', array('required' => 'required')) !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('phone', 'Telefone') !!}
                        {!! Form::text('phone') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('zipcode', 'CEP') !!}
                        {!! Form::text('zipcode', null, array('required' => 'required')) !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('address', 'Endereço') !!}
                        {!! Form::text('address') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('number', 'Número') !!}
                        {!! Form::text('number') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('complement', 'Complemento') !!}
                        {!! Form::text('complement') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('neighborhood', 'Bairro') !!}
                        {!! Form::text('neighborhood') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('city', 'Cidade') !!}
                        {!! Form::text('city') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('state_id', 'Estado') !!}
                        {!! Form::select('state_id', $state, null, array('required' => 'required')) !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::openGroup('country', 'País') !!}
                        {!! Form::text('country', 'Brasil') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-block btn-flat">Voltar</a>
                        </div>
                        <div class="col-xs-4" style="float:right">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registar</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>

        <script type="text/javascript">
            $(document).ready( function () {
                $('#formRegister').validate({
                    rules: {
                        email: {
                            required: true,
                            email: true,
                            remote: {
                                url: "{{ url('auth/verify-email') }}",
                                type: "post"
                            }
                        }
                    }
                });

                $('#zipcode').focusout(function () {
                    var zipcode = $('#zipcode').val();
                    zipcode = zipcode.replace(/\.|\-/g, '');

                    $.ajax({
                        type: 'get',
                        url: 'https://viacep.com.br/ws/' + zipcode + '/json/',
                        success: function (retorno) {
                            $('#address').val(retorno.logradouro);
                            $('#neighborhood').val(retorno.bairro);
                            $('#city').val(retorno.localidade);
                            $("#state_id option:contains(" + retorno.uf + ")").prop("selected", "selected");
                        }
                    })
                })
            });
        </script>
    </body>
</html>