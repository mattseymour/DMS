@extends('app')

@section('header')
    <h1 class="page-header">Add a Donor</h1>
@endsection

@section('content')

{!! Form::open(['url' => 'donors/create']) !!}

<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::select('title', ['Mr' => 'Mr', 'Mrs' => 'Mrs', 'Miss' => 'Miss', 'Ms' => 'Ms', 'Rev' => 'Rev (Reverend)', 'Dr' => 'Dr (Doctor)'], 'Mr', ['class' => 'form-control']) !!}
</div>


<div class="form-group">
{!! Form::label('first_name', 'First Name:') !!}
{!! Form::text('first_name', 'Joe', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('last_name', 'Last Name:') !!}
{!! Form::text('last_name', 'Bloggs', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('address', 'Address:') !!}
{!! Form::text('address', '5 Drake Close, Saltford, Bristol', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('postcode', 'Postcode:') !!}
{!! Form::text('postcode', 'BS31 3LW', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('phonenumber', 'Phone Number:') !!}
{!! Form::text('phonenumber', '01225 873586', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('giftaid', 'Gift Aid?') !!}
{!! Form::checkbox('giftaid', '1', 'true') !!}
</div>

<div class="form-group">
{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@endsection