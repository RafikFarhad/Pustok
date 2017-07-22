@extends('layouts.app')
@section('content')




    <div class="container">

        <!-- You only need this form and the form-labels-on-top.css -->

        @if(Auth::user()->user_type!='normal')
<style type="text/css">
    .form-group {
        margin: 20px;
    }

    .tet{
        text-align: center;
    }


</style>

        <form class="form-horizontal" method="POST" action="/lendbook">

        {{csrf_field()}}
              <fieldset>
                <legend class="tet">Lend Book</legend>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Borrower Registration Number:</label>
                  <div class="col-lg-5">
                    <input type="text" name="regno" class="form-control" id="inputEmail" placeholder="Borrower Registration Number">
                  </div>
                  </div>


                  <div class="form-group">
                  <label for="inputb" class="col-lg-5 control-label">Book Access No: </label>
                  <div class="col-lg-5">
                    <input type="text" name="book_id" id="inputb" class="form-control" placeholder="Book ID">
                  </div>
</div>

                  <div class="form-group">
                  <label for="inputl" class="col-lg-5 control-label">Number of days: </label>
                  <div class="col-lg-5">
                    <input type="number" name="number_of_day" id="inputl" class="form-control"  value="5" min="1" max="30">
                  </div>

</div>

                
                
                <div class="form-group">
                  <div class="col-lg-12 col-lg-offset-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </fieldset>
            </form>

            @if($request!=NULL)
                
                <!-- TEST -->

                <h2> request for add loan </h2>
                <h2> <?php echo $request->regno ?> </h2>
                <h2> <?php echo $request->book_id ?> </h2> -->

                <!-- VEERIFY USER AND BOOK-->
                <?php

                    $temp_user = DB::table('users')->where('regno', $request->regno)->first();
                    $temp_book = DB::table('books')->where('id', $request->book_id)->first();
                ?>
                @if($temp_user==NULL)
                    <h2> Invalid User </h2>
                {{-- /// CHECK IF USER IS FULL  --}}
                @elseif($temp_user->loan_number1!=0 && $temp_user->loan_number2!=0)
                    <h2> User Qouta is full </h2>

                @elseif($temp_book==NULL)
                    <h2> No Book for this serial number </h2>
                @else
                    <?php
                        $temp_loan = DB::table('loans')->where('bookid', $temp_book->id)->first();
                    ?>
                    <!-- CHECK IF THAT BOOK IS TAKEN BY OTHERS -->
                    @if($temp_loan!=NULL && $temp_loan->retturn==1)
                        <h2> This book is taken by others </h2>
                    <!-- OTHERWISE GIVE THIS BOOK -->
                    @else

                    <?php
                        
                        $id = DB::table('loans')->insertGetId(
                            [
                            'bookid' => $request->book_id , 
                            'date' => date("Y/m/d"),
                            'expiry_date' => date('Y/m/d', strtotime('+'.$request->number_of_day.' days')),
                            'user' => $request->regno,
                            'retturn' => 1,
                            ]);

                        $temp_loan = DB::table('loans')->where('bookid', $temp_book->id)->where('retturn', 1)->first();
                        // UPDATE IN USER TABLE

                        if($temp_user->loan_number1==NULL || $temp_user->loan_number1==0)
                        {
                            DB::table('users')
                                ->where('regno', $temp_user->regno)
                                ->update(['loan_number1' => $temp_loan->loan_number]);
                        }
                        else
                        {
                            DB::table('users')
                                ->where('regno', $temp_user->regno)
                                ->update(['loan_number2' => $temp_loan->loan_number]);
                        }

                        /// UPDATE IN BOOK TABLE

                        DB::table('books')
                                ->where('id', $request->book_id)
                                ->update(['loan_number' => $temp_loan->loan_number]);


                    ?>
                    <h2> Cleared For Loan :) </h2>
                    @endif

                @endif


                
            @endif

        @else

            <div class="form-row">
                <label>
                    <span>No access</span>
                </label>
            </div>


        @endif

        

    </div>

</body>


@endsection
