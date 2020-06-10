<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Normalize CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #101010;
                font-family: 'Lato', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>

    </head>
    <body>
        <div id="app" class="content">
            <example-component></example-component>
        </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
