<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mad Cow Client</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h1>{{ $clients->companyName }}</h1>
                    <h1>{{ $clients->ownerName }}</h1>
                    <h1>{{ $clients->ownerTitle }}</h1>
                </div>
            </div>
            
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </body>
</html>
