@extends('layouts.main')

@section('content')
<form action="{{route('clients.store')}}" method="POST">
    @csrf
    @include('clients.fields')
    
    <a href="{{route('clients.index')}}" class="btn btn-secondary">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection