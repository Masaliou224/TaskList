<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config("app.name") }}</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  @viteReactRefresh
  @vite('resources/views/react/app.tsx')

</head>
<body>
  <div id="app" data-projects="{{ json_encode($projects)}}"></div>
</body>
</html>