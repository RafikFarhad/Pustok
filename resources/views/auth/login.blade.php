<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page | IICT Seminar Library</title>

    <!-- Bootstrap CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="admin/css/font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="admin/js/html5shiv.js"></script>
    <script src="admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="{{url('/')}}/login" method="post">
        {{csrf_field()}}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="regno" name="regno" value="{{ old('regno') }}" class="form-control" required autofocus>
                @if ($errors->has('regno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('regno') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" id="inputEmail" placeholder="bPassword">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
    </form>
    <div class="text-right">

    </div>
</div>


</body>
</html>
