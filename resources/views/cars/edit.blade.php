@extends('app')

@section('content')


    <h1>Edit: @foreach($brands as $brand) @if($car->brand == $brand->id) {{ $brand->name }} @endif @endforeach {!! $car->model !!}</h1>

    {!! Form::open(['method' => 'PATCH', 'url' => 'cars/edit/' . $car->id]) !!}

    {!! Form::hidden('id', $car->id, '') !!}

        @include('cars.form', ['submitButtonText' => 'Update car'])

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