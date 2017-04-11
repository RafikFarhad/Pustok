@extends('layouts.app')
@section('content')
<head>

  <link rel="stylesheet" href="css/ex.css">
  <link rel="stylesheet" href="css/ex.css">

</head>

<body>

  <div class="wrapper">

    <div class="table">

      <div class="row header">
        <div class="cell">
          Name
        </div>
        <div class="cell">
          Registration Number
        </div>
        <div class="cell">
          Book Name
        </div>
        <div class="cell">
          Expiry Date
        </div>
        <div class="cell">
          Returned
        </div>

      </div>

      @if($loans==NULL)

      <h1> No loan pending</h1>

      @else

      @foreach($loans as $loan)

      @php 

        $user = DB::table('users')->where('regno', $loan->user)->first();
        $book = DB::table('books')->where('id', $loan->bookid)->first();

      @endphp

      <div class="row">
        <div class="cell">
          {{ $user->name }}
        </div>
        <div class="cell">
          {{ $loan->user }}
        </div>
        <div class="cell">
          {{ $book->name }}
        </div>
        <div class="cell">
          {{ $loan->expiry_date }}
        </div>
        <div class="cell">
          {{ $loan->retturn==0?"Yes":"No" }}
        </div>

      </div>

      @endforeach



      @endif

    </div>
  </div>

</body>


@endsection
