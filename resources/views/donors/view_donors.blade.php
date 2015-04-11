@extends('app')

@section('header')
    <h1 class="page-header">View Donors</h1>
@endsection

@section('content')

      <div class="table-responsive">
        <table class="table">

          <tr>
            <th>Envelope Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Postcode</th>
            <th>Gift Aid</th>
            <th>Options</th>
          </tr>
            @foreach ($donors as $donor)
          <tr>
            <td>{{ $donor->id }}</td>
            <td>{{ $donor->first_name }}</td>
            <td>{{ $donor->last_name }}</td>
            <td>{{ $donor->address }}</td>
            <td>{{ $donor->postcode }}</td>
            <td>{{ $donor->giftaid }}</td>
            <td>
    <div class="btn-group" role="group" aria-label="Default button group">
      <button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-primary">View</button>
    </div>
            </td> 
          </tr>
            @endforeach

            <tr>
            <td>
                <a class="btn btn-success" href="/dashboard/{{$donor->organisation_id}}/donor/create">Add</a>
            </td>
          </tr>
        </table>
      </div>

@endsection
