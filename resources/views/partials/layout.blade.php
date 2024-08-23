<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }} Laravel En Español - Documentación y guía completa actualizada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    @if (isset($canonical))
    <link rel="canonical" href="{{ url($canonical) }}">
    @endif

    <!-- Primary Meta Tags -->
    <meta name="title" content="Laravel En Español - Documentación y guía completa actualizada">
    <meta name="description"
        content="Laravel es un framework para aplicaciones web con una sintaxis expresiva y elegante. El Framework sienta las bases para que puedas liberar tu creatividad sin preocuparte por las tareas tediosas y repetitivas.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://documentacionlaravel.com/">
    <meta property="og:title" content="Laravel En Español - Documentación y guía completa actualizada">
    <meta property="og:description"
        content="Laravel es un framework para aplicaciones web con una sintaxis expresiva y elegante. El Framework sienta las bases para que puedas liberar tu creatividad sin preocuparte por las tareas tediosas y repetitivas.">
    <meta property="og:image" content="https://documentacionlaravel.com/img/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://documentacionlaravel.com/">
    <meta property="twitter:title"
        content="Laravel En Español - Documentación y guía completa actualizada">
    <meta property="twitter:description"
        content="Laravel es un framework para aplicaciones web con una sintaxis expresiva y elegante. El Framework sienta las bases para que puedas liberar tu creatividad sin preocuparte por las tareas tediosas y repetitivas.">
    <meta property="twitter:image" content="https://documentacionlaravel.com/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    @production
    <!-- Plausible -->
    <script defer data-domain="documentacionlaravel.com" src="https://stats.documentacionlaravel.com/js/script.outbound-links.js"></script>
    @endproduction

    @php
    $routesThatAreAlwaysLightMode = collect([
    'marketing',
    ])
    @endphp

    <script>
        const alwaysLightMode = {{ ($routesThatAreAlwaysLightMode->contains(request()->route()->getName())) ? 'true' : 'false' }};
    </script>

    @include('partials.theme')
</head>

<body x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }" class="language-php h-full w-full font-sans text-gray-900 antialiased">
    
    @yield('content')

    @include('partials.footer')

    <script>
        @php
        $currentVersion = isset($currentVersion) ? $currentVersion : config('settings.default_version');
    @endphp
    var version = '{{ $currentVersion }}';
    </script>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
