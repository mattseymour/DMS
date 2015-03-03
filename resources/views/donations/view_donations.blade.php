@extends('app')

@section('header')
    <h1 class="page-header">View Donors</h1>
@endsection

@section('content')

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Envelope Number</th>
            <th>Cause</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Payment Method</th>
            <th>Options</th>
          </tr>
            @foreach ($donations as $donation)
          <tr>
            <td>{{ $donation->donor_id }}</td>
            <td>{{ $donation->cause }}</td>
            <td>{{ $donation->amount }}</td>
            <td>{{ $donation->payment_date }}</td>
            <td>{{ $donation->payment_method }}</td>
            <td>
    <div class="btn-group" role="group" aria-label="Default button group">
      <button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-primary">View</button>
    </div>
            </td> 
          </tr>
            @endforeach

        </table>
      </div>

@endsection
