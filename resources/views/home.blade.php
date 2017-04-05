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

                    @if(Auth::user()->user_type!='normal')
                    <div class='container'>
                        <h3>Hello Admin</h3>
                    </div>
                    <div class="links">

                        <li>
                            <a href="{{ url('/lendbook') }}">Lend Book</a>
                        </li>
                        <li>
                            <a href="{{ url('/recievebook') }}">Receive Book</a>
                        </li>
                        <li>
                            <a href="{{ url('/status') }}">Check User Status</a>
                        </li>
                        <li>
                            <a href="{{ url('/addbook') }}">Add Book</a>
                        </li>
                        <li>
                            <a href="/expired">Expired</a>
                        </li>
                        <li>
                            <a href="/loanhistory">Loan History</a>
                        </li>
                        <li>
                            <a href="/registeruser">Register</a>
                        </li>
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
