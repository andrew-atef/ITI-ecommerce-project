@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">category: {{ $category->name }}</div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($category->products as $product)
                            <div class="col-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('images/' . $product->picture) }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ $product->price }}$, {{ $product->availability }}</p>
                                        Category: 
                                        <a class="card-text" href="{{ route('category.show', $product->category->id) }}">{{ $product->category->name }}</a>
                                        <a href="{{ route('product.show', $product->id) }}"
                                            class="btn btn-primary">show</a>
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
