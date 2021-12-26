@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Customer Data</h2></div>

                <div class="card-body">
                    <b>Name</b>     : {{ $customer->name }} <br>
                    <b>Address</b>     : {{ $customer->address }} <br>
                    <b>Number Telephone</b>     : {{ $customer->number_tlp }} <br>
                    <b>Order Date</b>     : {{ $customer->order_date }} <br>
                    <b>Catalog Theme</b>     : {{ $customer->catalog_theme }} <br>
                    <b>Package</b>     : {{ $customer->package }} <br>
                    <b>Total Product</b>     : {{ $customer->total_product }} <br>
                    <table class="table table-responsive table striped" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Catalog Theme</th>
                                <th>Package</th>
                                <th>Total Product</th>
                                <th></th>
                            </tr>
                        </thead>          
                    <tbody>

                     <!-- He kayake yang bagian @foreach ini nih harus pake relasi deh :) -->
                    @foreach ($customer->courses as $c)
                   <!-- Mungkin kalo gak pake relasi kayak gini ... -->
                   @foreach ($customer as $c)
                        <tr>
                            <td> {{ $c->name }} </td>
                            <td> {{ $c->address }} </td>
                            <td> {{ $c->catalog_theme }} </td>
                            <td> {{ $c->package }} </td>
                            <td> {{ $c->total_product }} </td>
                           
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <a href="/customer/{{$customer->id}}/report" class="btn btn-primary" target="_blank">PRINT DATA</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection