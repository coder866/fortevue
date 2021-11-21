<!DOCTYPE html>
<html lang="en" dir="ltr" mode="light">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vito - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @prod
        <link rel="stylesheet" href="{{vite('app.css')}}">
        <script type="module" src="{{vite('app.js')}}"></script>
    @else
        <script type="module" src="http://localhost:3001/@vite/client"></script>
        <script type="module" src="http://localhost:3001/resources/js/app.js"></script>
    @endprod
</head>
<body>
    <noscript>
        <strong>
            We're sorry but {{ env('APP_DESCRIPTION') }} doesn't work properly without JavaScript enabled.
            Please enable it to continue.
        </strong>
    </noscript>
    <div id="app">

    </div>

    
</body>
</html>
