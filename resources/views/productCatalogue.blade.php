@extends('layouts.main')

@section('title', 'Product Catalogue')

@section('content')
<div class="catalogue d-flex flex-wrap justify-content-start">
    @foreach ($arrProduk as $produk)
        @if ($produk['status'] == 'SSR')
            <div class="cartProduk m-3 p-3" style="background-color: red">
                <h1>
                    <a href="/productCatalogue/{{ $produk['slug'] }}">{{ $produk['name'] }}</a>
                </h1>
                <h3>Status: {{ $produk['status'] }}</h3>
                <h4>Harga: Rp{{ $produk['price'] }}</h4>
                <p>{{ $produk['description'] }}</p>
            </div>

            @elseif ($produk['status'] == 'SR')
            <div class="cartProduk m-3 p-3" style="background-color: gold">
                <h1>
                    <a href="/productCatalogue/{{ $produk['slug'] }}">{{ $produk['name'] }}</a>
                </h1>
                <h3>Status: {{ $produk['status'] }}</h3>
                <h4>Harga: Rp{{ $produk['price'] }}</h4>
                <p>{{ $produk['description'] }}</p>
            </div>

            @else
            <div class="cartProduk m-3 p-3" style="background-color: silver">
                <h1>
                    <a href="/productCatalogue/{{ $produk['slug'] }}">{{ $produk['name'] }}</a>
                </h1>
                <h3>Status: {{ $produk['status'] }}</h3>
                <h4>Harga: Rp{{ $produk['price'] }}</h4>
                <p>{{ $produk['description'] }}</p>
            </div>

        @endif
    @endforeach
</div>
@endsection
