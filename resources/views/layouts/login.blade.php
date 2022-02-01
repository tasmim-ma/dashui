<!doctype html>
<html lang="fr">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ url('favicon.ico') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix(config('tailwind')) }}">
    {!! htmlScriptTagJsApi(['action' => 'loginDashboard']) !!}
</head>
<body>
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    @yield('content')
</div>
</body>
</html>
