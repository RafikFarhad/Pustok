@extends('layouts.app')
@section('content')
<div class="container">

    <!-- You only need this form and the form-labels-on-top.css -->

    @if(Auth::user()->user_type!='normal')

    <style type="text/css">
            form{
              color: white;
            }

            .form-group {
                margin: 20px;
            }

            .tet{
                color: white;
                margin-left: 300px;
            }
        </style>

    <form class="form-horizontal" method="POST" action="/status">

    {{csrf_field()}}
              <fieldset>
                <legend class="tet">Check Status</legend>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-3 control-label">Registration No:</label>
                  <div class="col-lg-5">
                    <input type="text" name="regno" class="form-control" id="inputEmail" placeholder="Registration Number">
                  </div>
                  </div>

                <div class="form-group">
                  <div class="col-lg-12 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary">Check Status</button>
                  </div>
                </div>
              </fieldset>
            </form>

    @if($request!=NULL)
        <div class='container' allignment="center">
            <div class='page-header'>
                <?php
                    $us = DB::table('users')->where('regno', $request->regno)->first();
                ?>        
                @if($us->loan_number1=='NULL' && $us->loan_number2=='NULL')
                    <h2> Wow, {{$us->name}} has nothing from us! </h2>
                @else
                    <h2> Details: </h2>
                    <h3> <br> User Registration Number: {{$us->regno}} </h3>
                    <h3> <br> User Registration Name:  {{$us->name}} </h3>

                    <?php
                    $loan1 = $us->loan_number1;
                    $loan2 = $us->loan_number2;
                    if($loan1!=0)
                    {
                        $single_loan = DB::table('loans')->where('loan_number', $loan1)->first();
                        $book = DB::table('books')->where('id', $single_loan->bookid)->first();
                        echo $book->name . "<br>" . $book->author . "<br>";
                        echo "Issue date: ". $single_loan->date;
                        echo "<br> Expiry date: ". $single_loan->expiry_date ."<br>";
                    }
                    ?>
                    <hr> 

                    <?php
                    if($loan2!=0)
                    {
                        $single_loan = DB::table('loans')->where('loan_number', $loan2)->first();
                        $book = DB::table('books')->where('id', $single_loan->bookid)->first();
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
