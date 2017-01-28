<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IICT Seminar Library') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    
</head>
<body>

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
</body>
</html>
