@extends('layouts.master')

@section('content')

  <div class="col-md-8">
    <div class="panel panel-default">
      <h4 class="text-center">{{ $tittle }}</h4>
      @include('layouts.messages.errors')
      <div class="panel-body">
      <form class="lead" action="/news" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="tittle">{{ ucfirst(trans('validation.attributes.title')) }}</label>
          <input id="tittle" type="text" class="form-control" name="tittle" required autofocus>
        </div>
        <div class="form-group">
          <label for="resume">{{ ucfirst(trans('validation.attributes.summarize')) }}</label>
          <textarea class="form-control" name="resume" id="resume" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="content">{{ ucfirst(trans('validation.attributes.content')) }}</label>
          <textarea class="form-control" name="content" id="content" rows="15"></textarea>
        </div>
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ ucfirst(trans('validation.attributes.send')) }}
          </button>
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection
