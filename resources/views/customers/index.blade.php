@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATA CUSTOMER') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-succes" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/customers/create" class="btn btn-dark">Add Data Customer</a><br><br>
                    <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Search</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" 
                                        placeholder="Masukkan nama yang anda cari">
                            <button type="submit" class="btn btn-dark mb-1">Search</button>
                        </div>
                    </form>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Order Date</th>
                                <th>Catalog Theme</th>
                                <th>Package</th>
                                <th>Total Product</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($customer as $c)
                            <tr>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->address }}</td>
                                <td>{{ $c->number_tlp }}</td>
                                <td>{{ $c->order_date }}</td>
                                <td>{{ $c->catalog_theme }}</td>
                                <td>{{ $c->package }}</td>
                                <td>{{ $c->total_product }}</td>
                                <td>
                                <form action="/customers/{{$c->id}}" method="post">
                                    <a href="/customers/{{$c->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/customers/{{$c->id}}" class="btn btn-warning">View</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection