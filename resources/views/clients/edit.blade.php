@extends('layouts.main')

@section('content')
<form action="{{route('clients.update', $client->id)}}" method="POST">
    {{ method_field('PUT') }}
    @csrf
    @include('clients.fields', ['isEdit' => true])

    <a href="{{route('clients.index')}}" class="btn btn-secondary">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection