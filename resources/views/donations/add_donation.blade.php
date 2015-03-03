@extends('app')

@section('header')
    <h1 class="page-header">Add a Donation</h1>
@endsection

@section('content')

{!! Form::open(['url' => 'donations/create']) !!}


<div class="form-group">
{!! Form::label('donor_id', 'Donor ID:') !!}
{!! Form::text('donor_id', 'Envelope Number', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('cause', 'Cause') !!}
{!! Form::select('cause', $causes, 'Sunday Service', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('amount', 'Amount:') !!}
   <div class="input-group">
   <span class="input-group-addon">£</span>
{!! Form::text('amount', '£6.50', ['class' => 'form-control']) !!}
   </div>
</div>

<div class="form-group">
{!! Form::label('date', 'Date:') !!}
{!! Form::input('date', 'date', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('payment_method', 'Payment Method:') !!}
{!! Form::text('payment_method', 'Payment Method', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@endsection