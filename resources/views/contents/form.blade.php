@extends('layouts.master')

@section('content')

  <div class="col-sm-8">
    <div class="panel panel-default">
      <h1 class="panel-heading text-center">
        {{ (isset($id) ? ucfirst(trans('validation.attributes.edit')) : ucfirst(trans('validation.attributes.add')) ) }}
        {{ ' ' . trans('validation.attributes.content') }}
      </h1>
      @include('layouts.messages.errors')
      <div class="panel-body">
      <form class="lead" action="/content{{ (isset($id) ? '/' . $id : '' ) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        @if(isset($id))
          {{ method_field('PATCH') }}
        @endif
        <input id="modules_id" type="hidden" name="modules_id" value="{{ $menu->id }}">
        <input id="prefix" type="hidden" name="prefix" value="{{ $menu->prefix }}">
        <div class="form-group">
          <label for="content">{{ ucfirst(trans('validation.attributes.content')) }}</label>
          <textarea class="form-control" name="value" id="value" rows="15" required autofocus>
            {{ isset($contens) ? $contens->value : old('value') }}
          </textarea>
        </div>
        <div class="form-group col-md-4">
          @if(isset($id))
          <button type="submit" class="btn btn-primary">
            {{ ucfirst(trans('validation.attributes.update')) }}
          </button>
          <a href="/{{$menu->prefix}}">{{ ucfirst(trans('validation.attributes.cancel')) }}</a>
          @else
          <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ ucfirst(trans('validation.attributes.create')) }}
          </button>
          @endif
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection
