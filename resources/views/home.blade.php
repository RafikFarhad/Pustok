@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="/css/allcss.css">
<style type="text/css">
    #diva{
        text-align: center;
        font-size: 25px;
        color: #2518A7;
        border-radius:17px;
        border:1px solid #1f2f47;

    }
    #dasha{
        text-align: center;
        font-size: 25px;
        color: #2518A7;
        border-radius:17px;
        border:1px solid #1f2f47;

    }
    #paragraph{
        font-size: 35px;
        color: #2518A7;
        font-family: bold;

    }



</style>

</head>



<div class="container"  >

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="dasha" class="panel-heading">Dashboard</div>

                <div class="panel-body" id="diva" >
                    Welcome {{Auth::user()->name}}! </br>
                    
                </div>
                <!-- For borrowed book  -->
                <div class='container'>

                    @if(Auth::user()->user_type!='normal')
                    <div class='container' >
                        <p id="paragraph"> Hello Admin </p>
                    </div>
                    <div class="links">

                        
                            <a class="myButton" href="{{ url('/lendbook') }}">Lend Book</a>
                        
                        <br>
                            <a class="myButton" href="{{ url('/recievebook') }}">Receive Book</a>
                        <br>
                            <a class="myButton" href="{{ url('/status') }}">Check User Status</a>

                        <br>
                            <a class="myButton" href="{{ url('/addbook') }}">Add Book</a>
                        <br>
                            <a class="myButton" href="/expired">Expired</a>
                        <br>
                            <a class="myButton" href="/loanhistory">Loan History</a>
                        <br>
                            <a class="myButton" href="/registeruser">Register</a>
                       
                    </div>

                    @else
                    <div class='container'>
                        <div class='page-header'>
                        
                            @if(($all["single_loan1"]==NULL ) && ($all["single_loan2"]==NULL ))
                            <h2> Wow, you have nothing from us! </h2>
                            
                            @else
                            <h2> All Books You have borrowed: </h2>
                            <?php
                            
                            if($all["single_loan1"]!=NULL)
                            {
                                $book = $all["book1"];
                                $single_loan = $all["single_loan1"];
                            
                                echo $book->name . "<br>" . $book->author . "<br>";
                                echo "Issue date: ". $single_loan->date;
                                echo "<br> Expiry date: ". $single_loan->expiry_date. "<br>". "<br>";
                            }
                            if($all["single_loan1"]!=NULL)
                            {
                                $book = $all["book1"];
                                $single_loan = $all["single_loan1"];
                                
                                echo $book->name . "<br>" . $book->author . "<br>";
                                echo "Issue date: ". $single_loan->date;
                                echo "<br> Expiry date: ". $single_loan->expiry_date;
                            }
                            ?>
                            @endif
                        </div>
                    </div>


                    
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
