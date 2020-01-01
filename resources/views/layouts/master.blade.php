<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Why is this necessary? Bootstrap should be creating this, but we have to include
             this by hand here or we get a console error that it's not included. -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mad Cow Web Design')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Favicon and application icons for all browsers. Generated using
             https://realfavicongenerator.net/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#aa001c">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Mad Cow Web Design">
    <meta name="application-name" content="Mad Cow Web Design">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="/css/app.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="main">
        <!-- Main Container for entire page -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/"><img src="/images/madcowwebdesign.jpg"></a>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/clients">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/create">Create New Client</a>
                            </li>
                        </ul>
            </div> <!-- end header container -->
        </header>
        <div class="main-content container">
            @yield('content')
        </div><!-- end main content -->
        <footer>
            <section class="container">
                <p>Website by Mad Cow Web Design</p>
            </section>
        </footer><!-- end footer -->
    </div><!-- end main -->
    <script>
    document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

    </script>
</body>

</html>
