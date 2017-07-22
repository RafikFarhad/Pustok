@extends('layouts.app')

@section('content')


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

<div style="margin-top: 70px" >
    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="dasha" class="panel-heading">Dashboard</div>

                <div class="panel-body" id="diva" >
                    Welcome {{Auth::user()->name}}! </br>
                    
                </div>
                 @if(Auth::Guest()==false && Auth::user()->user_type!='normal')
                    
                    @else
                    <div>
                        <div class='page-header' style="margin-top: 200px;">
                        
                            @if(($all["single_loan1"]==NULL ) && ($all["single_loan2"]==NULL ))
                            <p> Wow, you have nothing from us! </p>
                            
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
                            if($all["single_loan2"]!=NULL)
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
                <!-- For borrowed book  -->
                <!--  -->

            </div>
    </div>
</div>
@endsection
