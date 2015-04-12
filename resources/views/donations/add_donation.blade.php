@extends('app')

@section('header')
    <h1 class="page-header">Add a Donation</h1>
@endsection

@section('content')

{!! Form::open(['url' => 'donations/create']) !!}


<div class="form-group">
{!! Form::label('donor_id', 'Envelope Number:') !!}
{!! Form::input('number', 'donor_id', '123', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('cause', 'Cause') !!}
{!! Form::select('cause', $causes, 'Sunday Service', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('amount', 'Amount:') !!}
   <div class="input-group">
   <span class="input-group-addon">£</span>
{!! Form::input('number','amount', '6.50', ['class' => 'form-control']) !!}
   </div>
</div>

<div class="form-group">
{!! Form::label('date', 'Date:') !!}
{!! Form::input('date', 'date', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('payment_method', 'Payment Method:') !!}
{!! Form::select('cause', array(1 => 'Cash', 2 => 'Cheque', 3 => 'Direct Debit'), 'Sunday Service', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@endsection