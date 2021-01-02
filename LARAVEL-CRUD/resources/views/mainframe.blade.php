<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <title>@yield('title', 'CRUD - Laravel')</title>

    </head>
<body>

<div class="header"><br>
  <h1 class="text-center">PHP LARAVEL CRUD OPERATION</h1><br>
  <h6 class="text-right pr-5 pb-2">©Designed and Developed by Aslam Mamud || Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </h6>
</div>

<div class="container">
    @yield('mainContent')
</div>

    </body>
</html>
