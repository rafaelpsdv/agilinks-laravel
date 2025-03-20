<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- You MUST include jQuery 3.4+ before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.4/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.4/dist/semantic.min.js"></script>

    <title>Document</title>
</head>
<body>
    <header class="ui menu">
        <a href="" class="header item">Agilinks</a>
        <a href="{{ route('links.index')}}" class="item">Links</a>
        <a href="{{ route('collections.index')  }}" class="item">Collections</a>
    </header>

    <div class="ui hidden section divider"></div>

   @yield('main') 
</body>
</html>