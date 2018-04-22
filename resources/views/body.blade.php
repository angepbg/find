<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<header>
    <nav style="background-color: red;">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center">COR - Test - Sopa de letras</a>
        </div>
    </nav>
</header>
<body>
    <main>@yield('paginas')</main>
</body>
</html>