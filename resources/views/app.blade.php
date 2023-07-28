<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans min-h-screen bg-gray-50 antialiased leading-normal">
    <div id="app">
        <router-view></router-view>
    </div>

    @vite('resources/ts/app.ts')
</body>
</html>
