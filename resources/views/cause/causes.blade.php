@extends('app')

@section('header')
    <h1 class="page-header">Manage Causes</h1>
@endsection

@section('content')

      <div class="table-responsive">
        <table class="table">

          <tr>
            <th>Cause Name</th>
            <th>Cause Description</th>
          </tr>
            
            @foreach ($causes as $cause)
          <tr>
            <td>{{ $cause->cause_name }}</td>
            <td>{{ $cause->cause_description }}</td>
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
                <a class="btn btn-success" href="/dashboard/{{$id}}/cause/create">Add</a>
            </td>
          </tr>

        </table>
      </div>

@endsection
