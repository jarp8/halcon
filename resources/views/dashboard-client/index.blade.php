@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <form action="{{ route('invoices.getinvoiceinfo') }}">
        @csrf
        <div class="mb-3">
            <div class="form-group mb-3">
                <label for="user_id">Client number:</label>
                <input type="user_id" class="form-control" id="user_id" name="user_id" placeholder="1">
            </div>

            <div class="form-group mb-3">
                <label for="invoice_id">Invoice number:</label>
                <input type="invoice_id" class="form-control" id="invoice_id" name="invoice_id" placeholder="1">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@push('scripts')
    <script>
        $(function() {
            console.log($('#user_id'));
        });
    </script>
@endpush
