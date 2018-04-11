@extends('layouts.master')

@section('content')
<div class="justify-content-center">
  <div class="blog-post">
    <h2 class="blog-post-title">{{ $new->tittle }}</h2>
    <p class="mb-1 text-muted">Created by {{ $new->user->name }} on
    {{ $new->created_at->toFormattedDateString() }}</p>
    <hr>
    <p class="bog-content mb-4">{{ $new->resume }}</p>

    <p class="bog-content">{{ $new->content }}</p>
  </div>
  @if (Auth::check())
  <div class="menu fixed bottom right mr-4 mb-4 bg-white">
  <div class="list-group">
    <a href="/news/{{ $new->id }}/edit" class="list-group-item text-dark"
       title="{{ ucfirst(trans('validation.attributes.edit')) }}"><i class="far fa-edit"></i></a>
    <a href="{{ '/news/' . $new->id }}" class="list-group-item text-dark"
       title="{{ ucfirst(trans('validation.attributes.delete')) }}" onclick="event.preventDefault();
      document.getElementById('delete-form').submit();" ><i class="far fa-trash-alt"></i></a>
  </div>
  <form id="delete-form" action="{{ '/news/' . $new->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE')}}
  </form>
  </div>
  @endif
</div>
@endsection
