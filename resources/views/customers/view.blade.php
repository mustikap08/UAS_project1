@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATA CUSTOMER') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                            <table class ="table table-responsive">
                                <tr><th>Name</th><th>:</th><td>{{ $customer->name }}</td></tr>
                                <tr><th>Address</th><th>:</th><td>{{ $customer->address }}</td></tr>
                                <tr><th>Number Telephone</th><th>:</th><td>{{ $customer->number_tlp }}</td></tr>
                                <tr><th>Order Date</th><th>:</th><td>{{ $customer->order_date }}</td></tr>
                                <tr><th>Catalog Theme</th><th>:</th><td>{{ $customer->catalog_theme }}</td></tr>
                                <tr><th>Package</th><th>:</th> <td>{{ $customer->package }}</td></tr>
                                <tr><th>Total Product</th><th>:</th><td>{{ $customer->total_product }}</td></tr>
                            </table>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection