@extends('layouts.app')

@section('content')
<div class="container">
<div class="alert alert-dark" role="alert" width="10px">You are <strong>logged in!</strong></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <table class="table table-striped ">
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
