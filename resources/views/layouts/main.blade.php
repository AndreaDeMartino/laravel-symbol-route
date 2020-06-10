<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="d-flex flex-column align-items-center">

  {{-- Header --}}
  <header class="header d-flex flex-column align-items-center mt-4">
    <img class="header__logo" src="https://getcomposer.org/img/logo-composer-transparent3.png" alt="logo">
    <h1 class="header__title my-3 display-4">A Dependency Manager for PHP</h1>
    <p class="header__subtitle">Latest: <strong>1.10.7</strong></p>
  </header>

  @yield('content')

  {{-- Footer --}}
  <footer class="footer d-flex flex-column align-items-center">
    <p class="footer__author">Authors: <a href="#">Adermann</a>, <a href="#">Jordi Boggiano</a> and <a href="#">many community</a> contributions</p>
    <div class="footer__sponsor d-flex flex-column align-items-center">
      <p class="sponsor__head">Sponsored by:</p>
      <img class="sponsor__logo" src="https://getcomposer.org/img/privatepackagist.png" alt="sponsor logo">
      <p class="sponsor__info">Logo by: <a href="#">WizardCat</a></p>
    </div>
    <p class="footer__release text-muted">Composer and all content on this site are released under the <a href="#">MIT license.</a></p>
  </footer>

{{-- JS --}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>