<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homedeve - Software design and implementation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="manifest" href="manifest.json">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Hdev">
        <meta name="apple-mobile-web-app-title" content="Hdev">
        <meta name="msapplication-starturl" content="index.html">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/png" sizes="98x22" href="images/logo.png">
   <link rel="apple-touch-icon" type="image/png" sizes="98x22" href="images/logo.png">
   <link rel="icon" type="images/png" sizes="92x22" href="images/logo.png">
    </head>
    <style>

    </style>
    <body>
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Contat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clients">Clients</a>
                </li>

              </ul>

              @yield('content')
        </div>
    </body>
</html>
