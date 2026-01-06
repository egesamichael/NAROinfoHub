<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'NARO infoHub') }}</title>

  <!-- Tailwind (compiled via Mix) -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Helpers -->
  <style>[x-cloak]{ display:none !important; }</style>

  <!-- Livewire -->
  @livewireStyles
</head>
<body class="bg-gray-50 font-sans antialiased">
  <x-nav />  {{-- Our shared menu --}}
  <main class="py-6">
    @yield('content')
  </main>

  @livewireScripts
</body>
</html>
