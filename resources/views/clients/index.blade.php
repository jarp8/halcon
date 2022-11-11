@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<div class="row">
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
</div>
@endif
<div class="row align-items-center">
    <div class="col-6">
        <h1>Clients</h1>
    </div>

    <div class="col-6 text-end">
        <a href="{{route('clients.create')}}" title="add">
          <i class="add-btn fa-solid fa-plus"></i>
        </a>
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">RFC</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>

      </tr>
      <tr>

      </tr>
      <tr>

      </tr>
    </tbody>
</table>
@endsection