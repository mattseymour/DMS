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
            
           
          <tr>
            <td>{{ $cause->name }}</td>
            <td>{{ $cause->description }}</td>
            <td>
    <div class="btn-group" role="group" aria-label="Default button group">
    </div>
            </td> 
          </tr>
    
            <tr>
            <td>
                <a class="btn btn-success" href="/dashboard/{{$id}}/cause">Back</a>
            </td>
          </tr>

        </table>
      </div>

@endsection
