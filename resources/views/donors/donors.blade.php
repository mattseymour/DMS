@extends('app')

@section('header')
    <h1 class="page-header">Donors</h1>
@endsection

@section('content')
      <div class="row">

        <div class="col-xs-6">
          <a href="/add_donor" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-plus" aria-hidden="true" style="font-size:5em;"></span>
          </a>
          <h4>Add Donor</h4>
        </div>


        <div class="col-xs-6">
          <a href="/view_donors" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size:5em;"></span>
          </a>
          <h4>View/Edit Donors</h4>
        </div>



      </div>
@endsection