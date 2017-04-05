@extends('layouts.app')
@section('content')

<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js
"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script>
  $(document).ready(function() {
    $('#datatable').DataTable();
} );

</script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Search in IICT Seminar Library</title>



    {{-- 
    <link rel="stylesheet" href="AddBook/assets/demo.css">
    <link rel="stylesheet" href="AddBook/assets/form-labels-on-top.css"> --}}

</head>

<body>
    <div class="main-content">

        <!-- You only need this form and the form-labels-on-top.css -->

        @if(Auth::user()->user_type!='normal')


        {{-- <form id="form1" runat="server"> --}}
        <table id="datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Call Number</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Publication</th>
                    <th>Edition</th>
                    <th>Availability</th>
                </tr>
            </thead>

            <tbody>

                @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->callnumber}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->Publication}}</td>
                    <td>{{$book->Edition}}</td>
                    <td>True</td>
                </tr>

                @endforeach
            </tbody>
        </table>


        {{-- </form> --}}



        @else

        <div class="form-row">
            <label>
                <span>No access</span>
            </label>
        </div>


        @endif



    </div>

</body>
{{-- <script src="http://plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 --}}
 {{-- <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js
"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#datatable').DataTable();
    });

</script> --}}

@endsection
