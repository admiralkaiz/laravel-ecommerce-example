<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body style="width:95%">
    <!-- @auth -->
        <div class="row justify-content-center" style="margin-top: 2%">
            <div class="col-3">
                <!-- {{ Auth::user()->name }} -->
                @if (session('email'))
                Welcome, {{ session('name') }}
                @endif
                <a href="/logout" class="btn btn-warning">Logout</a>
            </div>
        </div>
    <!-- @endauth -->
    <div class="row justify-content-center" style="margin-top: 13%;">
        @yield('content')
    </div>
</body>
</html>