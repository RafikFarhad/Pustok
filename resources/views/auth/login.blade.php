<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pustok - Login Form</title>

	<link rel="stylesheet" href="Login/assets/demo.css">
	<link rel="stylesheet" href="Login/assets/form-login.css">

</head>


	<header>
		<a class="navbar-brand" href="{{ url('/') }}">
                        IICT SEMINAR LIBRARY
                    </a>
    </header>
    <div class="main-content">
        <link href="/css/app.css" rel="stylesheet">
        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Registration No:</span>
                            <input type="regno" name="regno" value="{{ old('regno') }}" required autofocus>
                            @if ($errors->has('regno'))
                                <span class="help-block">
                                    Ther is no registration key.
                                </span>
                            @endif
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input id="password" type="password" name="password" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Log in</button>
                    </div>

                </div>

                <a href="{{ url('/password/reset') }}" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="{{ url('/register') }}" class="form-create-an-account">Create an account &rarr;</a>

            </div>

        </form>

    </div>

</body>

</html>
