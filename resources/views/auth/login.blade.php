@extends('layouts.app')
@section('content')


<style type="text/css">
    
    .form-group {
        margin: 20px;
    }
    .main-content{
        color: white;
    }

    .tet{
        margin-left: 300px;
        color: white;
    }
</style>
<div  class="main-content">

    <div class="container">



        <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <fieldset>
                <legend class="tet">Log In</legend>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-3 control-label">Registration Number:</label>
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
              <label for="inputEmail" class="col-lg-3 control-label">Password:</label>
              <div class="col-lg-5">
                <input type="password" name="password" class="form-control" id="inputEmail" placeholder="Borrower Registration Number">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-12 col-lg-offset-3">
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>


    </fieldset>
</form>

</div>        

</div>

</body>


@endsection
