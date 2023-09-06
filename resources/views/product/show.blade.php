@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product</div>

                    <div class="card-body">
                        <div class="col-12">
                            <div class="card">
                                <img src="{{ asset('images/' . $product->picture) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->price }}$, {{ $product->availability }}</p>


                                    @if (auth()->user()->hasRole('admin'))
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger mb-2" type="submit">Delete</button>
                                        </form>

                                        <form action="{{ route('product.update', $product->id) }}">
                                            <button class="btn btn-info mb-2" type="submit">Update</button>
                                        </form>
                                    @else
                                        <button class="btn btn-primary mb-2 add-to-cart"
                                            data-product-id="{{ $product->id }}" data-product-price="{{ $product->price }}"
                                            data-product-name="{{ $product->name }}">add to art</button>
                                    @endif


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
