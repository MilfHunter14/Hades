<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <link href="/img/marcas/jordan_blanco.png" rel="icon">
    <!--Método que le permite darle estilo a las vistas-->
    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap1.js', 
    'resources/css/style.css', 'resources/js/main.js'])
</head>
<body>
    {{ $slot }}
</body>
