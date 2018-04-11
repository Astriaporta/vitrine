@extends('layouts.master')

@section('content')
<div class="mt-0 d-flex justify-content-center align-items-center text-center">
  <div class="col-sm-9">
    <h3 class="text-center">{{ ucfirst(trans('menu.about')) }}</h3>
    @foreach($contens as $conten)
      <div>
        <div class="text-justify">
        @if (Auth::check())
          <form action="/content/{{ $conten->id }}" method="post" class="my-2">
            <a href="/about/{{$conten->id }}/edit" class="btn btn-secondary">{{ ucfirst(trans('validation.attributes.edit')) }}</a>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">{{ ucfirst(trans('validation.attributes.delete')) }}</button>
          </form>
        @endif
          {{ ($conten->value) }}
        </div>
      </div>
    @endforeach
  </div>
  @if (Auth::check())
    <div class="menu fixed bottom right mr-4 mb-4 bg-white">
      <div class="list-group">
          <a href="/about/create" class="list-group-item text-dark"
           title="{{ ucfirst(trans('validation.attributes.add')) . ' ' . trans('validation.attributes.content') }}">
           <i class="fas fa-plus"></i>
          </a>
      </div>
    </div>
  @endif
</div>
@endsection
