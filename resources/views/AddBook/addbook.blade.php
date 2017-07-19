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


            <form class="form-horizontal" method="post" action="/addbook">

            {{csrf_field()}}
              <fieldset>
                <legend class="tet">Add New Book</legend>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Name:</label>
                  <div class="col-lg-5">
                    <input type="text" name="name" class="form-control" id="inputEmail" placeholder="Book Name">
                  </div>
                  </div>


                <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Author:</label>
                  <div class="col-lg-5">
                    <input type="text" name="author" class="form-control" id="inputEmail" placeholder="Author Name">
                  </div>
                  </div>

                <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Publication:</label>
                  <div class="col-lg-5">
                    <input type="text" name="publication" class="form-control" id="inputEmail" placeholder="Publication">
                  </div>
                  </div>


                <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Edition:</label>
                  <div class="col-lg-5">
                    <input type="text" name="edition" class="form-control" id="inputEmail" placeholder="Edition">
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Call Number:</label>
                  <div class="col-lg-5">
                    <input type="text" name="callnumber" class="form-control" id="inputEmail" placeholder="call number">
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="inputEmail" class="col-lg-5 control-label">Serial Number:</label>
                  <div class="col-lg-5">
                    <input type="text" name="id" class="form-control" id="inputEmail" placeholder="Serial ID">
                  </div>
                  </div>
  




                <div class="form-group">
                  <div class="col-lg-12 col-lg-offset-5">
                    <button type="submit" class="btn btn-primary">Add Book</button>
                  </div>
                </div>
              </fieldset>

            
            <hidden name="loan_number" value="0" />

            </form>
















        
               <!--  <form class="form-labels-on-top" method="post" action="/addbook">

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

            a dropdown menu if needed
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
            </div>
            <div class="form-row">
                <label>
                    <span>Call Number</span>
                    <input type="text" name="callnumber" required="">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Serial Number</span>
                    <input type="text" name="id" required="">
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Add</button>
            </div>




            <hidden name="loan_number" value="0" />

        </form> --> 


        

        @else

            <div class="form-row">
                <label>
                    <span>No access</span>
                </label>
            </div>


        @endif

        @if(isset($msg))

        <h1> {{$msg}} </h1>

        @endif

    </div>

</body>


@endsection
