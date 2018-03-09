@extends('app')

@section('content')

    <h1>Add a new car</h1>

    {!! Form::open(['url' => 'cars']) !!}

        @include('cars.form', ['submitButtonText' => 'Save car'])

    {!! Form::close() !!}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@stop