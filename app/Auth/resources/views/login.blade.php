<!DOCTYPE html>
<html lang="en">
<head>
    <title>CiA CMS</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a><b>CiA</b> CMS</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Insira os dados para iniciar a sessão</p>
        {!! Form::open(['method' => 'post', 'route' => ['login']]) !!}
        <div class="form-group has-feedback">
            {!! Form::openGroup('email', 'E-mail') !!}
            {!! Form::text('email') !!}
            {!! Form::closeGroup() !!}
        </div>
        <div class="form-group has-feedback">
            {!! Form::openGroup('password', 'Senha') !!}
            {!! Form::password('password') !!}
            {!! Form::closeGroup() !!}
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Lembrar-me
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script src="{{ elixir('js/app.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>