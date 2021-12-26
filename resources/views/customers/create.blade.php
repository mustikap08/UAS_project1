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
                    <form action="/customers" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required="required" name="name"></br>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" required="required" name="address"></br>
                    </div>
                        <div class="form-group">
                        <label for="number_tlp">Phone Number</label>
                        <input type="text" class="form-control" required="required" name="number_tlp"></br>
                    </div>
                    <div class="form-group">
                        <label for="order_date">Order Date</label>
                         <input type="text" class="form-control" required="required" name="order_date"></br> 
                    </div>
                    <div class="form-group">
                        <label for="catalog_theme">Catalog Theme</label>
                        <input type="text" class="form-control" required="required" name="catalog_theme"></br>
                        <!-- <select class="form-control" name="Catalog">
                            @foreach($catalog as $catalog)
                                <option value="{{$catalog->id}}"> 
                                    {{ $catalog->catalog_name }} 
                                </option>
                            @endforeach
                        </select></br> -->
                    </div>
                    <div class="form-group">
                        <label for="package">Package</label>
                        <input type="text" class="form-control" required="required" name="package"></br>
                    </div>
                    <div class="form-group">
                        <label for="total_product">Total Product</label>
                        <input type="text" class="form-control" required="required" name="total_product"></br>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo Catalog</label>
                        <input type="file" class="form-control" required="required" name="photo"></br>
                    <div>
                    <button type="submit" name="add" class="btn btn-dark float-right">Add Data</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</div>

@endsection