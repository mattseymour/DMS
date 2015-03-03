@extends('app')

@section('header')
    <h1 class="page-header">Gift Aid Management {{ $organisation->name }}</h1>
@endsection

@section('content')

      <div class="row">

        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/donations" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-gbp" aria-hidden="true" style="font-size:5em;"></span>
          </a>
          <h4>Donations</h4>
        </div>


        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/donors" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:5em";></span>
          </a>
          <h4>Donors</h4>
        </div>


        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/claim" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-check" aria-hidden="true" style="font-size:5em";></span>
          </a>
          <h4>Make a Claim</h4>
        </div>


        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="/dashboard/{{$organisation->id}}/causes" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-globe" aria-hidden="true" style="font-size:5em";></span>
          </a>
          <h4>Cause Management</h4>
        </div>

      </div>

@endsection