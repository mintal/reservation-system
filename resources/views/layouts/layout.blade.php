<!DOCTYPE html>
<html>
<head>
    <title>DIF Reservation System - {{route::getCurrentRoute()->getName()}}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        /*TODO: change from inline*/
        .bg-dark {
            background-color: #393c3f !important;
        }

        html, body {
            background-color:#ededed !important;
        }

        .navbar-dark {
            border-bottom:1px solid #ffee00;
        }
    </style>
</head>
<body>
    @include('layouts.app')
</body>
</html>