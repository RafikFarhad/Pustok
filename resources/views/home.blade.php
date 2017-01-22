@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome {{Auth::user()->name}}! </br>
                    Happy to see you again !
                </div>
                <!-- For borrowed book  -->
                <div class='container'>
                    <div class='page-header'>
                        <h2> All Books You have borrowed: </h2>
                    </div>
                    @if(Auth::user()->loan_number1=='NULL')
                        <h2> Wow, you have nothing from us! </h2>
                    @else
                        <h2> Very Bad @ </h2>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
