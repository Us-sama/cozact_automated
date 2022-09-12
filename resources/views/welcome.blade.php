<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cozact - Automatisme</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        {{-- scripts --}}
        <script type="module" src="{{asset('js/app.js')}}" defer></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg pb-4 pt-4 shadow-lg" style="background-color: #3B32C0">
            <div class="container-fluid ">
                <a class="navbar-brand " href="#">
                  <img src="{{asset('img/logo-COZACT.png')}}" alt="" width="150" style="margin-left: 20px">
                </a>
            </div>
          </nav>
        
        <div id="app">

        </div>

    </body>
</html>
