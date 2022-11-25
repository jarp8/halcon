@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="row mt-1">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="row align-items-center">
        <div class="col-6">
            <h1>Clients</h1>
        </div>

        <div class="col-6 text-end">
            <a href="{{ route('clients.create') }}" title="add">
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
            @if ($clients !== null)
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->rfc }}</td>
                        <td>
                            {{-- Edit --}}
                            <a href="{{ route('clients.edit', $client->id) }}"><i
                                    class="fa-solid fa-pen-to-square m-3"></i></a>

                            {{-- Delete --}}
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="edit-form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
