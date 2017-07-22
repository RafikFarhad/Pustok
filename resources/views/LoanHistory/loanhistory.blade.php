@extends('Admin.header')
@section('content')

  <div class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Loan History
          </header>

          <table class="table table-striped table-advance table-hover">
            <tbody>
            <tr>
              <th><i class="icon_profile"></i> Name</th>
              <th><i class="icon_calendar"></i> Reg No</th>
              <th><i class="icon_mail_alt"></i> Book ID</th>
              <th><i class="icon_pin_alt"></i> Book name</th>
              <th><i class="icon_mobile"></i> Expiry Date</th>
              <th><i class="icon_mobile"></i> Returned ?</th>
            </tr>
            @foreach($loans as $loan)

              @php

                $user = DB::table('users')->where('regno', $loan->user)->first();
                $book = DB::table('books')->where('id', $loan->bookid)->first();

              @endphp
              <tr>
                <td> {{ $user->name }} </td>
                <td> {{ $loan->user }} </td>
                <td> {{ $book->id }} </td>
                <td> {{ $book->name }} </td>
                <td>{{ $loan->expiry_date }}</td>
                <td>{{ ($loan->retturn==0)?'Yes':'No' }}</td>
              </tr>
            @endforeach

            </tbody>
          </table>
        </section>
      </div>
    </div>
    @if($loans==NULL)
      <h1> No loan pending</h1>
    @else

    @endif
    {{$loans->links()}}
  </div>


@endsection
