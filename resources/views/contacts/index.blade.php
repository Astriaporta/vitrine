@extends('layouts.master')

@section('content')
<div class="">
  <h4 class="text-center">{{ ucfirst(trans('menu.contact-list')) }}</h4>
  <div class="row">
    @foreach($contactList as $contact)
      @include('contacts.contact')
    @endforeach
  </div>
</div>
@endsection
