@extends('admin.layout.admin')

@section('content')

    <h3>merchedises</h3>

    <ul class="container">
        @forelse($products as $product)
            <li class="row">


                <<h1>this ia a product{{$product -> name}}</h1>


            </li>

        @empty

            <h3>No products</h3>

            @endforelse

    </ul>

    @endsection
