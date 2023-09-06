@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-3">
                <div class="card">
                    <div class="card-header">user</div>
                    <h5 class="p-2">User name: {{ auth()->user()->name }}</h5>
                    <h5 class="p-2">User email: {{ auth()->user()->email }}</h5>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Orders</div>


                    <div class="accordion" id="accordionExample">

                        @foreach ($orders as $order)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        #{{ $order->id }} - Total price: {{ $order->price }}$
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5>User name: {{ $order->user->name }}</h5>
                                        <h5>Products:</h5>
                                        @foreach ($order->products as $product)
                                            <hr>
                                            <p>Product name: {{ $product->name }}</p>
                                            <p>Product price: {{ $product->price }}</p>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
