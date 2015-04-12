@extends('app')

@section('header')
    <h1 class="page-header">Gift Aid Management System</h1>
@endsection

@section('content')

<h2>Your Organisations:</h2>

<div class="jumbotron">

@foreach ($organisations as $organisation)
    <p><a href="/dashboard/{{$organisation->id}}/" class="btn btn-primary btn-lg btn-block">{{ $organisation->name }}</a></p>
@endforeach



{!! Form::open(['url' => 'organisation/create']) !!}

<div class="form-group">
{!! Form::text('name', 'New Organisation', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Add', ['class' => 'btn btn-success form-control']) !!}
</div>

{!! Form::close() !!}

</div>

@endsection
   