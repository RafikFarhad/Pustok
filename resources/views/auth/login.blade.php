@extends('layouts.app')
@section('content')


<style type="text/css">
    .form-group {
        margin: 20px;
    }

    .tet{
        text-align: center;
    }
</style>
<div class="main-content">

    <div class="container">



        <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <fieldset>
                <legend class="tet">Log In</legend>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Registration Number:</label>
                  <div class="col-lg-5">
                    <input type="regno" name="regno" value="{{ old('regno') }}" class="form-control" required autofocus>
                    @if ($errors->has('regno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('regno') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-lg-5 control-label">Password:</label>
              <div class="col-lg-5">
                <input type="password" name="password" class="form-control" id="inputEmail" placeholder="Borrower Registration Number">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-12 col-lg-offset-5">
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>


    </fieldset>
</form>
<!-- 
<form class="form-login " style="margin: 0px auto;" method="POST" action="{{ url('/login') }}">
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
                        There is no registration key.
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

        {{-- <a href="{{ url('/password/reset') }}" class="form-forgotten-password">Forgotten password &middot;</a> --}}
        {{-- <a href="{{ url('/register') }}" class="form-create-an-account">Create an account &rarr;</a> --}}

    </div>

</form>
-->
</div>        

</div>

</body>


@endsection
