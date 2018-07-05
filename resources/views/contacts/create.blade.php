@extends('layouts.master')

@section('content')

@if($infosContact->activated)
<div class="col-sm-3">
  <h2 class="mt-3 display-4">{{ ucfirst(trans('validation.attributes.infos')) }}</h2>
  <address>
    <strong>{{ $infos->name }}</strong>
    <p>{{ $infos->address }}</p>
    <p>{{ $infos->city }}, {{ $infos->postalcode }}</p>
    <p>{{ $infos->country }}</p>
  </address>
  <address>
    <p>Phone: {{ $infos->phone }}</p>
    <p>Email: <a href="mailto:{{ $infos->email }}">{{ $infos->email }}</a></p>
  </address>
</div>
@endif

<div class="take-contact">
  <h4 class="text-center">{{ ucfirst(trans('validation.attributes.contact')) }}</h4>
    @include('layouts.messages.errors')
    @include('layouts.messages.success')
  <div class="card">
    <div class="card-body">
      <form class="lead" method="post" action="/contact">
        {{ csrf_field() }}
        <div class="input-group input-lg mt-4">
          <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}"
           value="{{ old('email') }}" placeholder="{{ ucfirst(trans('validation.attributes.email')) }}" required>
        </div>
        <div class="input-group input-lg mt-4">
          <input type="text" name="subject" id="subject" class="form-control{{ $errors->has('subject') ? ' has-error' : '' }}"
           value="{{ old('subject') }}" placeholder="{{ ucfirst(trans('validation.attributes.subject')) }}" required>
        </div>
        <div class="textarea-container mt-4">
          <textarea class="form-control{{ $errors->has('message') ? ' has-error' : '' }}"
            name="message" id="message" placeholder="{{ ucfirst(trans('validation.attributes.message')) }}" rows="4" maxlength="1000">{{ old('message') }}</textarea>
        </div>
        @include('layouts.validation.captcha')
        <div class="send-button mt-4">
          <button type="submit" class="btn btn-primary">{{ ucfirst(trans('validation.attributes.send')) }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
