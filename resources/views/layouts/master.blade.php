<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="{{ (Request::is('/') ? 'h-100' : '') }}">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrfToken">
    <title>{{ config('app.name', 'Vitrine') }}</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
     <!-- Font -->
     <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
     integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
     crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <!-- custrom -->
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body class="{{ (Request::is('/') ? 'h-100' : '') }}">
    @include('layouts.header')
    <div id="main" class="h-100 is-closed">
      @if(!Request::is('/'))
      <div role="main">
        @include('layouts.baner')
        <section class="pb-5 pt-5 mb-5">
          <div class="container">
            <div class="row justify-content-center">
              @yield('content')
            </div>
          </div>
        </section>
      </div>
      @include('layouts.footer')
      @else
      <div role="main" class="h-100 backgroung-img">
        @include('layouts.menu.open')
        <section class="h-100 w-100 transparent d-flex flex-column justify-content-center">
          <div class="container">
            @yield('content')
          </div>
        </section>
      </div>
      @endif
    </div>
    <script src="/js/axios.min.js" charset="utf-8"></script>
    <script src="/js/public/function.js" charset="utf-8"></script>
    <script src="/js/public/script.js" charset="utf-8"></script>
    @if(Auth::check())
      <script src="/js/private/function.js" charset="utf-8"></script>
      <script src="/js/private/script.js" charset="utf-8"></script>
    @endif
  </body>
</html>
