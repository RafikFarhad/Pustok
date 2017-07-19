@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="/css/allcss.css">
<style type="text/css">
    #diva{
        text-align: center;
        font-size: 25px;
        color: #2518A7;
        margin-top: 20px;
    }
    #dasha{
        text-align: center;
        font-size: 25px;
        color: #2518A7;
        border-radius:1px;
        border:1px solid #1f2f47;

    }
    #paragraph{
        font-size: 35px;
        color: #2518A7;
        font-family: bold;

    }



</style>

<div class="container" style="margin-top: 70px" >
    <div class="col-md-3">
        @include('layouts.sidebar')
    </div>
    <div class="col-md-9">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="dasha" class="panel-heading">Dashboard</div>

                <div class="panel-body" id="diva" >
                    Welcome {{Auth::user()->name}}! </br>
                    
                </div>
                <!-- For borrowed book  -->
                <!--  -->

            </div>
        </div>
    </div>
</div>
@endsection
