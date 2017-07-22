<div class="sidebar">
	<div class='container'>

                    @if(Auth::Guest()==false && Auth::user()->user_type!='normal')
                    <div class='container' >
                        <h2 id="paragraph"> Admin </h2>
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

                    @endif
                </div>
</div>