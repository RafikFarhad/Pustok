<div class="sidebar">
	<div class='container'>

                    @if(Auth::user()->user_type!='normal')
                    <div class='container' >
                        <p id="paragraph"> Admin </p>
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
</div>