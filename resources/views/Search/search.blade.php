<!DOCTYPE html>
<html>
@extends('layouts.customapp')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
.container{color: white;}

</style>

<body>
   @if (Auth::user()!=NULL)
   <div class="container ">
    {{ csrf_field() }}
    <div class="table-responsive text-center">
        <table class="table table-borderless" id="table">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>Access Number</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Publication</th>
                    <th>Edition</th>
                    <th>Availability</th>
                </tr>
            </thead>
            @foreach($books as $item)
            <tr>
                <td>{{$item->id}}</td>
                {{-- <td>{{$item->callnumber}}</td> --}}
                <td>{{$item->name}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->publication}}</td>
                <td>{{$item->edition==0?"-":$item->edition}}</td>
                <td>{{ $item->loan_number==0?"Yes":"No" }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@else

<h1>No Access</h1>

@endif
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
</script>


</body>
</html>

@endsection