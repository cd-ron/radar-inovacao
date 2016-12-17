<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Radar da Inovação</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
        <script src="httaps://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue-light sidebar-mini">
        <div class="wrapper">
            @include('admin.header')
            @include('admin.sidebar')
            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
                </section>
            </div>
            @include('admin.footer')
        </div>
        <script src="{{ elixir("js/app.js") }}"></script>
        <script src="{{ url("js/jquery-mask/jquery.mask.min.js") }}"></script>
        @yield('scripts')
    </body>
</html>