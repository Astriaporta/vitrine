@extends('layouts.master')

@section('content')
<div class="panel-group col-sm-10" id="accordion" role="tablist" aria-multiselectable="true">
  <h3 class="text-center">{{ ucfirst(trans('menu.parameters')) }}</h3>
  @include('parameters.options.menu')
  @include('parameters.options.other')
  @include('parameters.informations')
  @include('parameters.social')
</div>
@endsection
