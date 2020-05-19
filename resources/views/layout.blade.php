<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7/6 CRUD Example</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<style>
    .uper {
        margin-top: 40px;
    }
</style>

@yield('style')

<body>
    <div class="container uper">
        <div class="content">
            <div class="content">
                <h1 class="has-text-weight-light">Fave Disney Shows</h1>
            </div>
            <a class="button is-primary" href="{{ route('disneyplus.index') }}">
                Home
            </a>
            <a class="button is-link" href="{{ route('disneyplus.create') }}">
                Create a Show
            </a>
        </div>
    </div>
    <div class="container">
        <div class="content uper">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
