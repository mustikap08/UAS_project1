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

                    <form action="/customers/{{$customer->id}}" method="post"  enctype="multipart/form-data">{{csrf_field()}}
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$customer->id}}"></br>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required="required" name="name" value="{{$customer->name}}"></br>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" required="required" name="address" value="{{$customer->address}}"></br>
                    </div>
                        <div class="form-group">
                        <label for="number_tlp">Phone Number</label>
                        <input type="text" class="form-control" required="required" name="number_tlp" value="{{$customer->number_tlp}}" ></br>
                    </div>
                    <div class="form-group">
                        <label for="order_date">Order Date</label>
                        <input type="text" class="form-control" required="required" name="order_date" value="{{$customer->order_date}}" ></br>
                    </div>
                    <div class="form-group">
                        <label for="catalog_theme">Catalog Theme</label>
                        <input type="text" class="form-control" required="required" name="catalog_theme" value="{{$customer->catalog_theme}}" ></br>
                    </div>
                    <div class="form-group">
                        <label for="package">Package</label>
                        <input type="text" class="form-control" required="required" name="package" value="{{$customer->package}}" ></br>
                    </div>
                    <div class="form-group">
                        <label for="total_product">Total Product</label>
                        <input type="text" class="form-control" required="required" name="total_product" value="{{$customer->total_product}}" ></br>
                    </div>
                    <div class="form-group">
                        <label for="photo">Feature Image</label>
                        <input type="file" class="form-control" required="required" name="photo"value="{{$customer>photo}}"></br>
                            <img width="150px" src="{{asset('storage/'.$customer->photo)}}">
                    </div>

                    <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
