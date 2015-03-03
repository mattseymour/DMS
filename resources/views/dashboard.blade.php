@extends('app')

@section('header')
    <h1 class="page-header">Gift Aid Management - Organisations</h1>
@endsection

@section('content')




@foreach ($organisations as $organisation)
    <p>Dashboard : <a href="/dashboard/{{$organisation->id}}/">{{ $organisation->name }}</a></p>
@endforeach


{!! Form::open(['url' => 'organisation/create']) !!}

<div class="form-group">
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@endsection
   