@extends('Admin.header')

@section('content')
 <div class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register new user</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registeruser') }}">
                        {{ csrf_field() }}

                        @if($message = Session::get('success'))

                            <div class="alert alert-success">

                                <p>
                                    {{ $message }}
                                </p>
                                
                            </div>

                        @endif

                        @if($message = Session::get('Warning'))

                            <div class="alert alert-warning">

                                <p>
                                    {{ $message }}
                                </p>
                                
                            </div>

                        @endif






                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('regno') ? ' has-error' : '' }}">
                            <label for="regno" class="col-md-4 control-label">Reg No: </label>

                            <div class="col-md-6">
                                <input id="regno" type="regno" class="form-control" name="regno" value="{{ old('regno') }}" required>
<!-- 
                                @if ($errors->has('regno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regno') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <input type="hidden" name="loan_number1" value="0">
                        <input type="hidden" name="loan_number2" value="0">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
