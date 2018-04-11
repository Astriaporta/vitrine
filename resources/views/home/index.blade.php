@extends('layouts.master')

@section('content')
<div class="text-center">
  <h1 class="main-title">{{ config('app.name', 'Vitrine') }}</h1>
  <h2>{{ config('app.tittle', 'Example') }}</h2>
  @include('layouts.components.social')
  <p class="lead mt-5">
    <a href="/about" class="btn btn-lg btn-transparent">En savoir plus</a>
  </p>
</div>
@endsection
