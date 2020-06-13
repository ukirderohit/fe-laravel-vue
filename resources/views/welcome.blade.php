<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Normalize CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #101010;
                font-family: 'Lato', sans-serif;
                font-weight: 300;
                height: 100vh;
            }
            .content {
                width: 900px;
                margin: 0 auto !important;
                padding-bottom: 2.31em;
            }
            #app {
                margin-left: 17px;
                margin-right: 18px;
            }
            .hr--line{
                background: linear-gradient(90deg, #AC519C 0.83%, #E5424F 100%);
                box-shadow: 0px 3px 10px rgba(104, 104, 104, 0.5);
                height: 1px;
            }
            h1 {
                font-style: normal;
                font-weight: bold;
                font-size: 26px;
                line-height: 31px;
                color: #101010;
            }
            p {
                margin-top: 1.4em;
                line-height: 1.5em;
            }
            h2 {
                font-weight: bold;
                font-size: 18px;
                line-height: 22px;
            }
            img {
                border: none;
                margin-top: 1em;
                width: 100%;
                margin-bottom: 1em;
            }
            h3 {
                font-size: 26px;
                line-height: 28px;
            }
            /*// Medium devices (tablets, less than 897.9px)*/
            @media (max-width: 897.98px) {
                .content {
                    width: 90%;
                    float: none;
                    margin: 0 auto;
                }
            }
        </style>
    </head>
    <body>
        <div id="app" class="content">
            <main-component></main-component>
            <send-tips></send-tips>
        </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
