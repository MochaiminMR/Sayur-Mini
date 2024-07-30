<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Component Layout</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,301,400,401,500,501,700,701&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/faringa" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>
    @include('component.navbar')

    <div class="">
        @yield('content')
    </div>

    @include('component.footer')

    @vite('resources/js/app.js')
</body>

</html>
