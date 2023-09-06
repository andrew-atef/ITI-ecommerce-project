@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        @if ($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif

                        <form action="{{ route('product.edit', $product->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="text" name="name" value="{{ $product->name }}">
                            <input type="text" name="price" value="{{ $product->price }}">
                            <input type="text" name="availability" value="{{ $product->availability }}">
                            <input type="text" name="category_id" value="{{ $product->category_id }}">
                            <input type="file" name="picture">

                            <input type="submit">


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
