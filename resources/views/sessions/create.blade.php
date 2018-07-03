@extends('layouts.master')

@section('content')
<div class="connection">
  <h4 class="text-center">{{ ucfirst(trans('validation.attributes.signin')) }}</h4>
    @include('layouts.messages.errors')
  <div class="card">
    <div class="card-body">
    <form class="lead" action="/login" method="post" class="form-horizontal">
      {{ csrf_field() }}
      <input type="hidden" name="invalid" value="{{ old('invalid') ? old('invalid')+1 : 0 }}">
      <div class="input-group input-lg mt-4">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}"
         name="email" value="{{ old('email') }}" placeholder="{{ ucfirst(trans('validation.attributes.email')) }}" required autofocus>
      </div>
      <div class="input-group input-lg mt-4">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}"
         name="password" placeholder="{{ ucfirst(trans('validation.attributes.password')) }}" required>
      </div>
      @include('layouts.validation.captcha')
      <div class="input-group input-lg mt-4">
        <button type="submit" class="btn btn-primary">{{ ucfirst(trans('validation.attributes.signin')) }}</button>
      </div>
    </form>
    @if($registerActivated)
      <div class="text-right">
        <small>Or <a class="" href="/register/create">{{ ucfirst(trans('validation.attributes.register')) }}</a></small>
      </div>
    @endif
  </div>
  </div>
</div>
@endsection
