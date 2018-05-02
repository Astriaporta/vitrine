<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrfToken">
    <title>{{ config('app.name', 'Vitrine') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
      integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body class="h-100">
    @include('layouts.header')
    <div id="main" class="d-flex flex-column h-100 is-closed">
      @if(!Request::is('/'))
      <div role="main" class="d-flex flex-column">
        @include('layouts.baner')
        <section class="pb-5 pt-5">
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
