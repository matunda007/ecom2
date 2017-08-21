@extends('layout.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Welcome to Ecom
            </strong>
        </h2>
        <br>
        <a href="{{route('products')}}"><button class="button large">Our Best Sale</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Check Our Latest Products
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse($products->chunk(4) as $chunk)
        @foreach($chunk as $product)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{route('cart.edit',$product->id)}}" class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="{{url('images',$product->image)}}"/>
                    </a>
                </div>
                <a href="{{route('showproduct')}}">
                    <h3>
                        {{$product->name}}
                    </h3>
                </a>
                <h5>
                    {{$product->price}}
                </h5>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>

            @endforeach
            @empty
        <h2>there is no products to sell </h2>

            @endforelse
    </div>
    <!-- Footer -->
    <br>
    @endsection