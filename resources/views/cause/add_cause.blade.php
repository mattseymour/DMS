@extends('app')

@section('header')
    <h1 class="page-header">Add a Cause</h1>
@endsection

@section('content')

{!! Form::open(['url' => 'dashboard/'.$id.'/cause/create']) !!}


<div class="form-group">
{!! Form::label('cause_name', 'Cause Name:') !!}
{!! Form::text('name', 'Cause Name', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('cause_description', 'Add a Description:') !!}
{!! Form::textarea('description', 'Add a short description of the cause.', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@endsection