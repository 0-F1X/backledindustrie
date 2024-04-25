@extends('layouts.app')

@section('content')
    <div class="container">
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

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <h1 class="mt-5 mb-3">Dashboard</h1>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">100</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text">50</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Revenue</h5>
                        <p class="card-text">$5000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Orders</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Order 1</li>
                            <li class="list-group-item">Order 2</li>
                            <li class="list-group-item">Order 3</li>
                            <li class="list-group-item">Order 4</li>
                            <li class="list-group-item">Order 5</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Top Products</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Product 1</li>
                            <li class="list-group-item">Product 2</li>
                            <li class="list-group-item">Product 3</li>
                            <li class="list-group-item">Product 4</li>
                            <li class="list-group-item">Product 5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
