@extends('app')

@section('header')
    <h1 class="page-header">{{ $organisation->name }}</h1>
@endsection

@section('content')

      <div class="row">

        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/dashboard/{{$organisation->id}}/donation" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-gbp" aria-hidden="true" style="font-size:5em;"></span>
          </a>
          <h4>Donations</h4>
        </div>


        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/dashboard/{{$organisation->id}}/donor" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:5em";></span>
          </a>
          <h4>Donors</h4>
        </div>


        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/dashboard/{{$organisation->id}}/claim" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-check" aria-hidden="true" style="font-size:5em";></span>
          </a>
          <h4>Make a Claim</h4>
        </div>


        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/dashboard/{{$organisation->id}}/cause" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-globe" aria-hidden="true" style="font-size:5em";></span>
          </a>
          <h4>Cause Management</h4>
        </div>

      </div>

@endsection