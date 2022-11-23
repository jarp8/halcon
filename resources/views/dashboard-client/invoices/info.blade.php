@extends('layouts.app')

@section('content')
    <div class="p-3 invoice-info">
        <h1>Invoice</h1>
        
        <div>
            <p><span>Name:</span> {{ $client->name ?? '' }}</p>
            <p><span>Status:</span> {{ $invoice->invoiceStatus->name }}</p>
            <p><span>Delivery address:</span> {{ $invoice->delivery_address ?? '' }}</p>
            <p><span>Fecha:</span> {{ date('d-m-Y', strtotime($invoice->date)) }}</p>
            <p><span>Total:</span> {{ $invoice->total ?? '' }}</p>
        </div>

        @if ($invoiceRows ?? false)
            <div class="row">
                @foreach ($invoiceRows as $row)
                    <div class="col-4">
                        <p><span>Material name:</span> {{ $row->material->name ?? '' }}</p>
                        <p><span>Amount:</span> {{ $row->amount ?? '' }}</p>
                        <p><span>Price:</span> {{ $row->material->price ?? '' }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        @if ($invoiceFiles ?? false)
            <div class="row mb-3">
                @foreach ($invoiceFiles as $file)
                    <div class="col-6 dashboard-images">
                        <p class="fw-bold">{{ $file->fileType->name }}</p>
                        <img src='{{ Vite::asset("$file->url") }}' alt="">
                    </div>
                @endforeach
            </div>
        @endif

        <a href="{{ route('dashboard-client.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
