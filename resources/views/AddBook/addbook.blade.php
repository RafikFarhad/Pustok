@extends('layouts.app')
@section('content')
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Form With Labels On Top</title>

	<link rel="stylesheet" href="AddBook/assets/demo.css">
	<link rel="stylesheet" href="AddBook/assets/form-labels-on-top.css">

</head>


    <div class="main-content">

        <!-- You only need this form and the form-labels-on-top.css -->

        @if(Auth::user()->user_type!='normal')

        
                <form class="form-labels-on-top" method="post" action="/addbook">

            {{ csrf_field() }}

            <div class="form-title-row">
                <h1>Add Book</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" required="">
                    
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Author</span>
                    <input type="text" name="author" required="">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Publication</span>
                    <input type="text" name="publication" required="">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Edition</span>
                    <input type="number" name="edition" required="">
                </label>
            </div>

            <!-- a dropdown menu if needed -->
            <!-- div class="form-row">
                <label>
                    <span>Dropdown</span>
                    <select name="dropdown">
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                        <option>Option Four</option>
                    </select>
                </label>
            </div> -->
            <div class="form-row">
                <label>
                    <span>Call Number</span>
                    <input type="text" name="callnumber" required="">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Serial Number</span>
                    <input type="text" name="id" value="NULL" required="">
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Add</button>
            </div>

            <hidden name="loan_number" value="0" />

        </form>

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
