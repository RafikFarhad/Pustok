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
                            <h1>Hello Admin</h1>
                        </div>

                        <div class="links">
                        <a href="/addbook">Add Book</a>
                        <br> </br>
                        <a href="/lendbook">Lend Book</a>
                        <br> </br>
                        <a href="/status">Check User Status</a>

                </div>

                    @else
                    <div class='container'>
                        <div class='page-header'>
                            @if(Auth::user()->loan_number1=='NULL' && Auth::user()->loan_number2=='NULL')
                            <h2> Wow, you have nothing from us! </h2>
                            @else
                            <h2> All Books You have borrowed: </h2>
                            <?php
                            $loan1 = Auth::user()->loan_number1;
                            $loan2 = Auth::user()->loan_number2;
                            if($loan1!=0)
                            {
                                $book = DB::table('books')->where('id', $loan1)->first();
                                $single_loan = DB::table('loans')->where('loan_number', $loan1)->first();
                                echo $book->name . "<br>" . $book->author . "<br>";
                                echo "Issue date: ". $single_loan->date;
                                echo "<br> Expiry date: ". $single_loan->expiry_date;
                            }
                            if($loan2!=0)
                            {
                                $book = DB::table('books')->where('id', $loan2)->first();
                                $single_loan = DB::table('loans')->where('loan_number', $loan2)->first();
                                echo $book->name . "<br>" . $book->author . "<br>";
                                echo "Issue date: ". $single_loan->date;
                                echo "<br> Expiry date: ". $single_loan->expiry_date;
                            }
                            ?>
                        </div>
                    </div>


                    @endif
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
