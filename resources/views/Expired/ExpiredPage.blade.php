@extends('layouts.app')
@section('content')
<head>

  {{-- <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

  <title>Form With Labels On Top</title>

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
      </div>

      @endforeach



      @endif

    </div>
  </div>

</body>


@endsection
