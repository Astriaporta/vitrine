@extends('layouts.master')

@section('content')

  <div class="col-md-8">
    <div class="panel panel-default">
      <h4 class="text-center">{{ $tittle }}</h4>
      @include('layouts.messages.errors')
      <div class="panel-body">
      <form class="lead" action="/news/{{ $new->id }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
          <label for="tittle">{{ ucfirst(trans('validation.attributes.title')) }}</label>
          <input id="tittle" type="text" class="form-control" name="tittle" value="{{ $new->tittle }}" required autofocus>
        </div>
        <div class="form-group">
          <label for="resume">{{ ucfirst(trans('validation.attributes.summarize')) }}</label>
          <textarea class="form-control" name="resume" id="resume" rows="4">{{ $new->resume }}</textarea>
        </div>
        <div class="form-group">
          <label for="content">{{ ucfirst(trans('validation.attributes.content')) }}</label>
          <textarea class="form-control" name="content" id="content" rows="15">{{ $new->content }}</textarea>
        </div>
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-primary">{{ ucfirst(trans('validation.attributes.update')) }}</button>
          <a href="/news/{{ $new->id }}">{{ ucfirst(trans('validation.attributes.cancel')) }}</a>
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection
