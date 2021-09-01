<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="asset-url" content="{{ config('app.asset_url') }}">

    <title>Helix Code Challenge</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body class="antialiased bg-gray-150 py-8 px-4 md:px-12 container mx-auto text-gray-800">
<div id="app">
    <nav-component></nav-component>
    <product-details product="{{ json_encode($product) }}"></product-details>
</div>

</body>
</html>

