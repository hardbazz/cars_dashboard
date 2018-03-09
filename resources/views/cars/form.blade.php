
<h3><u>Basic information</u></h3>

<div class="form-group">
    {!! Form::label('brand', 'Car name') !!}

    <select name="brand" class="form-control">
        @foreach($brands as $brand)
        <option value="{{ $brand->id }}" @if($car->brand == $brand->id) {{ "selected" }} @endif> {{ $brand->name }} </option>
        @endforeach
    </select>

</div>

<div class="form-group">
{!! Form::label('model', 'Model') !!}
{!! Form::text('model', old('model', $car->model), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('bodytype', 'Body type') !!}

    <select name="bodytype" class="form-control">
        @foreach($bodytypes as $bodytype)
            <option value="{{ $bodytype->id }}" @if($car->bodytype == $bodytype->id) {{ "selected" }} @endif> {{ ucfirst($bodytype->name) }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('fuel', 'Fuel') !!}

    <select name="fuel" class="form-control">
        @foreach($fuels as $fuel)
            <option value="{{ $fuel->id }}" @if($car->fuel == $fuel->id) {{ "selected" }} @endif> {{ ucfirst($fuel->name) }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
{!! Form::label('weight', 'Weight') !!}
{!! Form::number('weight', old('weight', $car->weight), array('class' => 'form-control')) !!}
</div>

<div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
            <h3 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span> Additional information
                </a>
            </h3>
        </div>

<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="card-block">
        <div class="form-group">
        {!! Form::label('acceleration', 'Acceleration') !!}
        {!! Form::text('acceleration', old('acceleration', $car->acceleration), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('top_speed', 'Top speed') !!}
        {!! Form::number('top_speed', old('top_speed', $car->top_speed), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('mileage', 'Mileage') !!}
        {!! Form::number('mileage', old('mileage', $car->mileage), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('color', 'Color') !!}
        {!! Form::text('color', old('color', $car->color), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('doors', 'Doors') !!}
        {!! Form::number('doors', old('doors', $car->doors), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('gears', 'Gears') !!}
        {!! Form::number('gears', old('gears', $car->gears), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('transmission', 'Transmission') !!}
        {!! Form::select('transmission', array('' => 'Transmission','manual' => 'Manual', 'automatic' => 'Automatic'), old('transmission', $car->transmission), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('year_build', 'Year build') !!}
        {!! Form::number('year_build', old('year_build', $car->year_build), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('license_plate', 'License plate') !!}
        {!! Form::text('license_plate', old('license_plate', $car->license_plate), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('horsepower', 'Horsepower') !!}
        {!! Form::number('horsepower', old('horsepower', $car->horsepower), array('class' => 'form-control')) !!}
        </div>
    </div>
</div>
</div></div>


{!! Form::submit($submitButtonText, array('class' => 'buttons btn btn-success')) !!}
<a href="{{ URL::previous() }}" class="buttons btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Go Back</a>