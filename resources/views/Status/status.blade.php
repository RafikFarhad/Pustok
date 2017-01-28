@extends('layouts.app')
@section('content')
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="AddBook/assets/demo.css">
	<link rel="stylesheet" href="AddBook/assets/form-labels-on-top.css">

</head>


<div class="main-content">

    <!-- You only need this form and the form-labels-on-top.css -->

    @if(Auth::user()->user_type!='normal')


    <form class="form-labels-on-top" method="POST" action="/status">

        {{ csrf_field() }}

        <div class="form-title-row">
            <h1>Check Status</h1>
        </div>

        <div class="form-row">
            <label>
                <span>Registration No:</span>
                <input type="text" name="regno" required="">

            </label>
        </div>


        <div class="form-row">
            <button type="submit">Check</button>
        </div>

    </form>

    @if($request!=NULL)
        <div class='container' allignment="center">
            <div class='page-header'>
                <?php
                    $us = DB::table('users')->where('regno', $request->regno)->first();
                ?>        
                @if($us->loan_number1=='NULL' && $us->loan_number2=='NULL')
                    <h2> Wow, user has nothing from us! </h2>
                @else
                    <h2> Details: </h2>
                    <h3> <br> User Registration Number: <?php echo $us->regno ?> </h3>
                    <h3> <br> User Registration Name: <?php echo $us->name ?> </h3>

                    <?php
                    $loan1 = $us->loan_number1;
                    $loan2 = $us->loan_number2;
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
                @endif
            </div>
        </div>
    @endif
@endif

</div>



</body>


@endsection
