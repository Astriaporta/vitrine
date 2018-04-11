@extends('layouts.master')

@section('content')
  <div class="col-sm-3">
    @include('news.sidebar')
  </div>
  <div class="col-sm-9">
    <h4 class="text-center">{{ $tittle }}</h4>
    <div class="row mb-2">
      @foreach($news as $new)
        @include('news.new')
      @endforeach
    </div>
  </div>
    @if (Auth::check())
      <div class="menu fixed bottom right mr-4 mb-4 bg-white">
        <div class="list-group">
            <a href="/news/create" class="list-group-item text-dark" title="Add news"><i class="fas fa-plus"></i></a>
        </div>
      </div>
    @endif
@endsection
