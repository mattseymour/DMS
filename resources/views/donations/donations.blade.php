@extends('app')

@section('header')
    <h1 class="page-header">Donations</h1>
@endsection

@section('content')
      <div class="row">

        <div class="col-xs-6">
          <a href="/dashboard/{{$id}}/donation/create" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-gbp" aria-hidden="true" style="font-size:5em;"></span>
          </a>
          <h4>Add Donation</h4>
        </div>


        <div class="col-xs-6">
          <a href="/dashboard/{{$id}}/donation/view" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size:5em;"></span>
          </a>
          <h4>View/Edit</h4>
        </div>

      </div>
@endsection