<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#FFFFFF" />
    <meta
      name="description"
      content="Paket Niaga Hoster"
    />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/crack.css" rel="stylesheet">
    <title>NiagaHoster</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>

<body class="p0 m0">
    @yield('header')
    @yield('content')
    <div id="app" class="p0 m0">
    </div>
    @yield('powerfullcontent')
    @yield('footer')
    <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>
</body>

</html>