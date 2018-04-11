@extends('layouts.master')

@section('content')

  <div class="col-sm-5">
    <h4 class="text-center">{{ $tittle }}</h4>
    <div class="card">
      @include('layouts.messages.errors')
      <div class="card-body">
      <form class="lead" action="/register" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="input-group input-lg mt-4">
          <input id="name" type="text" class="form-control" name="name"
           placeholder="{{ ucfirst(trans('validation.attributes.name')) }}" value="{{ old('name') }}" required autofocus>
        </div>
        <div class="input-group input-lg mt-4">
          <input id="email" type="email"
           class="form-control{{ $errors->has('email') ? ' has-error' : '' }}"
           name="email" placeholder="{{ ucfirst(trans('validation.attributes.email')) }}" value="{{ old('email') }}" required>
        </div>
        <div class="input-group input-lg mt-4">
          <input id="password" type="password"
           class="form-control{{ $errors->has('password') ? ' has-error' : '' }}"
           name="password" placeholder="{{ ucfirst(trans('validation.attributes.password')) }}" required>
        </div>
        <div class="input-group input-lg mt-4">
          <input id="password-confirm" type="password"
           class="form-control{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"
           name="password_confirmation" placeholder="{{ ucfirst(trans('validation.attributes.comfirm-password')) }}" required>
        </div>
        @include('layouts.validation.captcha')
        <div class="input-group input-lg mt-4">
          <button type="submit" class="btn btn-primary">{{ ucfirst(trans('validation.attributes.register')) }}</button>
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection
