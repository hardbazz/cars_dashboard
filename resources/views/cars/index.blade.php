@extends('app')

@section('content')

    <h1><a href="/" style="color: black;">Car Dashboard</a></h1>

    <h3>There are {{ count($cars) }} cars in your collection.</h3>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Body type</th>
            <th>Fuel</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

            @foreach ($cars as $key => $car)

                    <tr data-id="{{ $car->id }}">
                        <td>{{ $key+1 }}</td>
                        <td class="carname" id="name_{{ $car->id }}"><a href="/cars/{{ $car->id }}">{{ ucfirst($car->carname) }}</a></td>
                        <td class="carmodel" id="model_{{ $car->id }}">{{ ucfirst($car->model) }}</td>
                        <td class="caryear" id="year_{{ $car->id }}">{{ $car->year_build }} </td>
                        <td class="carbodytype" id="bodytype_{{ $car->id }}">{{ ucfirst($car->bodyname) }}</td>
                        <td class="carfuel" id="fuel_{{ $car->id }}">{{ ucfirst($car->fuelname) }}</td>
                        <td>
                            <button class="btn btn-warning changeButton" id="clickToChange_{{ $car->id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                            <a href="#" data-popup-open="popup-1" class="btn btn-info car_info" id="car_info_{{ $car->id }}"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
                        </td>
                    </tr>

            @endforeach

        </tbody>
    </table>

    <a href="/cars/{{ $car->id }}/create " class="btn btn-success"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add new car</a>

    {{--<a class="btn btn-primary" data-popup-open="popup-1" href="#">Open Popup #1</a>--}}

    <div class="popup" data-popup="popup-1">
        <div class="popup-inner">

            <h2 id="model"></h2>

            <table class="table table-striped">
               <thead>
               </thead>
                <tbody>

                <tr>
                    <th>Top speed</th>
                    <td id="top_speed"></td>
                </tr>
                <tr>
                    <th>Mileage</th>
                    <td id="mileage"></td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td id="color"></td>
                </tr>
                <tr>
                    <th>Doors</th>
                    <td id="doors"></td>
                </tr>
                <tr>
                    <th>Gears</th>
                    <td id="gears"></td>
                </tr>
                <tr>
                    <th>Transmission</th>
                    <td id="transmission"></td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td id="weight"></td>
                </tr>
                <tr>
                    <th>Horsepower</th>
                    <td id="horsepower"></td>
                </tr>

                </tbody>
            </table>

            <p><button type="button" class="btn btn-success viewcar">Edit car</button></p> <!-- data-popup-close="popup-1" -->
            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        </div>
    </div>

    <script>
        $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Code to show the results in a pop-up
        //Show car info in console
        $('.car_info').on('click', function(){
            //----- OPEN

            //e.preventDefault();

            var id = $(this).closest('tr').attr('data-id');
            var that = this;
            $.get('api/cars/'+id)
                .then(function(data){
                    //console.log(this);

                    $("#model").html("Model: "+ data.model);
                    $("#top_speed").html(data.top_speed + " km/h");
                    $("#mileage").html(data.mileage + " km");
                    $("#color").html(data.color);
                    $("#doors").html(data.doors);
                    $("#gears").html(data.gears);
                    $("#transmission").html(data.transmission);
                    $("#weight").html(data.weight + " kg");
                    $("#horsepower").html(data.horsepower + " pk");

                    var targeted_popup_class = jQuery(that).attr('data-popup-open');
                    $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

                    $('.viewcar').click(function() {
                        window.location = "/cars/" + id + "/edit/";
                    });

                    //console.log(data);
                })
        });

        //----- CLOSE
        $('[data-popup-close]').on('click', function()  {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
            //e.preventDefault();
        });


        @foreach ($cars as $car)
            var clickToChange = "#clickToChange_{{ $car->id }}";
            var clickToSave   = "#clickToSave_{{ $car->id }}";

            $(document).on ("click", clickToChange, function () {

                // Replace model with edit field
                $("#model_{{ $car->id }}").replaceWith("<td class='carmodel'><div class='form-group'><form method='POST' action='{{ url('/') }}' class='' accept-charset='UTF-8'><input name='_method' type='hidden' value='PATCH'><input name='_token' type='hidden' value='{{ csrf_token() }}'><input type='hidden' value='{{ $car->id }}'><input type='text' name='model' size='2' class='form-control input-model' value='{{ ucfirst($car->model) }}'></form></div></td>");

                // Replace body type with edit field
                $("#bodytype_{{ $car->id }}").replaceWith("<td class='carbodytype'><div class='form-group'><form method='POST' action='{{ url('/') }}' class='' accept-charset='UTF-8'><input name='_method' type='hidden' value='PATCH'><input name='_token' type='hidden' value='{{ csrf_token() }}'><input type='hidden' value='{{ $car->id }}'><select name='bodytype' class='form-control input-bodytype' required>@foreach($bodytypes as $bodytype) <option value='{{ $bodytype->id }}' @if($car->bodytype == $bodytype->id)  {{ "selected" }} @endif> {{ ucfirst($bodytype->name) }} </option> @endforeach</form></div></td>");

                // Replace fuel with edit field
                $("#fuel_{{ $car->id }}").replaceWith("<td class='carfuel'><div class='form-group'><form method='POST' action='{{ url('/') }}' class='' accept-charset='UTF-8'><input name='_method' type='hidden' value='PATCH'><input name='_token' type='hidden' value='{{ csrf_token() }}'><input type='hidden' value='{{ $car->id }}'><select name='fuel' class='form-control input-fuel' required>@foreach($fuels as $fuel) <option value='{{ $fuel->id }}' @if($car->fuel == $fuel->id)  {{ "selected" }} @endif> {{ ucfirst($fuel->name) }} </option> @endforeach</form></div></td>");

                // Replace year with edit field
                $("#year_{{ $car->id }}").replaceWith("<td class='caryear'><div class='form-group'><form method='POST' action='{{ url('/') }}' class='' accept-charset='UTF-8'><input name='_method' type='hidden' value='PATCH'><input name='_token' type='hidden' value='{{ csrf_token() }}'><input type='hidden' value='{{ $car->id }}'><input type='text' name='model' size='2' class='form-control input-year' value='{{ ucfirst($car->year_build) }}' required></form></div></td>");

                if ($(clickToChange).length) {
                    $(".changeButton").prop('disabled', true);
                }

                // Replace edit button with save button
                $("#clickToChange_{{ $car->id }}").replaceWith("<button class='btn btn-success saveButton' id='clickToSave_{{ $car->id }}'><span class='glyphicon glyphicon-floppy-disk' id='save' aria-hidden='true'></span></button>");
            });

            $(document).on ("click", clickToSave, function (e) {

                e.preventDefault();

                var $post           = {};
                $post.id            = {{ $car->id }}
                $post.model         = $(this).parent().parent().find('.input-model').val();
                $post.year_build    = $(this).parent().parent().find('.input-year').val();
                $post.bodytype      = $(this).parent().parent().find('.input-bodytype').val();
                $post.fuel          = $(this).parent().parent().find('.input-fuel').val();
                //console.log($post.model);
                var url             = "http://localhost:8000/api/cars/edit/" + $post.id;
                $post._method       = "put";

                //var model = $post.model;

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $post,
                    cache: false,
                    success: function(data){
                        $(".form-group").addClass("has-success has-feedback");
                        $(".form-group form").append("<span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>");
                        $(".container").prepend("<div class='alert alert-success'><strong>Car updated!</strong></div>");

                        setTimeout(location.reload.bind(location), 800);
                    },
                    error: function(data){
                        $(".form-group").addClass("has-danger has-feedback");
                        $(".form-group form").append("<span class='glyphicon glyphicon-remove form-control-feedback' aria-hidden='true'></span>");
                        $(".container").prepend("<div class='alert alert-danger'><strong>Something went wrong!</strong></div>");
                    }
                });
                return false;
            });

        @endforeach

        });
    </script>

@stop