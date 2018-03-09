<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Car Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-validation/dist/jquery.validate.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <style>
        .form-group {
            margin-bottom: 0;
        }

        .buttons form {
            bottom: 36px;
        }

        .has-feedback .form-control {
            padding-right: 12px;
        }

        .carname a {
            color: #636b6f;
            text-decoration: underline;
            font-weight: 700;
        }
    </style>

</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>