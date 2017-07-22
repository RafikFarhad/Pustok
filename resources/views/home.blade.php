@extends('Admin.header')

@section('content')

    <div class="col-md-offset-1" style="margin-top: 50px;">
        <h1>Hello, {{Auth::user()->name}}</h1>
        <h3>Welcome to SUST IICT Seminar Library</h3>
    </div>
    <hr style="color: #0e2e42">
    @if(Auth::user()->user_type=='normal')
        <div class="col-md-offset-1" style="margin-top: 50px;">
            @if($single_loan1!=null)
                <h3>Book Name: {{$book1->name}}</h3>
                <h3>Issue Date: {{$single_loan1->date}}</h3>
                <h3>Expiry Date: {{$single_loan1->expiry_date}}</h3>
                <hr>
            @endif
            @if($single_loan2!=null)
                <h3>Book Name: {{$book2->name}}</h3>
                <h3>Issue Date: {{$single_loan2->date}}</h3>
                <h3>Expiry Date: {{$single_loan2->expiry_date}}</h3>
                <hr>
            @endif
        </div>

    @endif
@endsection
