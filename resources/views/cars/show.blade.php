@extends('app')

@section('content')

    <h1 style="text-decoration: underline; text-align: center;">{{ ucfirst($car->carname) }} {{ ucfirst($car->model) }}</h1>

    <div class="container">

        <div class="buttons">
            <a href="/" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Go back</a>
            <a href="/cars/{{ $car->id }}/edit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit car</a>
            {{--<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete car</a>--}}

            {!! Form::open([ 'method'  => 'DELETE', 'url' => 'cars/' . $car->id ]) !!}
            {!! Form::submit('Delete car', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>

        <h3>General information</h3>

        <table class="table table-striped">
            <tr>
                <th>Fuel</th>
                <td class="fuel">{!! ucfirst($car->fuelname) !!}</td>
            </tr>
            <tr>
                <th>Year build</th>
                <td>{!! $car->year_build !!}</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>{!! $car->weight !!} kg</td>
            </tr>
            <tr>
                <th>Body type</th>
                <td>{!! ucfirst($car->bodyname) !!}</td>
            </tr>
            <tr>
                <th>Acceleration (0 - 100)</th>
                <td>{!! $car->acceleration !!} sec.</td>
            </tr>
            <tr>
                <th>Top speed</th>
                <td>{!! $car->top_speed !!} km/h</td>
            </tr>
            <tr>
                <th>Mileage</th>
                <td>{!! number_format($car->mileage,0,",",".") !!} km</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>{!! $car->color !!}</td>
            </tr>
            <tr>
                <th>Doors</th>
                <td>{!! $car->doors !!}</td>
            </tr>
            <tr>
                <th>Gears</th>
                <td>{!! $car->gears !!}</td>
            </tr>
            <tr>
                <th>Transmission</th>
                <td>{!! ucfirst($car->transmission) !!}</td>
            </tr>
            <tr>
                <th>License plate</th>
                <td>{!! $car->license_plate !!}</td>
            </tr>
            <tr>
                <th>Horsepower</th>
                <td>{!! $car->horsepower !!} pk</td>
            </tr>
        </table>

        <h3>Financial information</h3>

        <table class="table table-striped">
            <tr>
                <th>Tax</th>
                <td>&euro;1</td>
            </tr>
            <tr>
                <th>Insurance</th>
                <td>&euro;2</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>&euro;3</td>
            </tr>
        </table>

    </div>

@stop