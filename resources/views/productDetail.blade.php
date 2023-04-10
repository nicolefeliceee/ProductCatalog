@extends('layouts.main')

@section('title', 'Product Detail')
@section('keywords', 'Board Game, Product Details, Price, Image, Name, Status, Description')
@section('description', 'Detail information about the most popular board game in the world')

@section('content')
<div class="detail d-flex flex-column justify-content-center align-items-center">
    @foreach ($arrProduk as $produk)
        @if ($produk['slug'] == $slug)
            @if ($produk['status'] == 'SSR')
            <div class="cartProduk w-75 p-3 m-3" style="background-color: red">
                <h1>
                    <a href="/productCatalogue/{{ $produk['slug'] }}">{{ $produk['name'] }}</a>
                </h1>
                <img src="{{ asset('assets/img/' . $produk['image']) }}" alt="">
                <h3>Status: {{ $produk['status'] }}</h3>
                <h4>Harga: Rp{{ $produk['price'] }}</h4>
                <p>{{ $produk['description'] }}</p>
            </div>
            <a href="/productCatalogue">
                <div class="btn btn-primary px-5 py-3">
                    <b>Back</b>
                </div>
            </a>

            @elseif ($produk['status'] == 'SR')
            <div class="cartProduk w-75 p-3 m-3" style="background-color: gold">
                <h1>
                    <a href="/productCatalogue/{{ $produk['slug'] }}">{{ $produk['name'] }}</a>
                </h1>
                <img src="{{ asset('assets/img/' . $produk['image']) }}" alt="">
                <h3>Status: {{ $produk['status'] }}</h3>
                <h4>Harga: Rp{{ $produk['price'] }}</h4>
                <p>{{ $produk['description'] }}</p>
            </div>
            <a href="/productCatalogue">
                <div class="btn btn-primary px-5 py-3">
                    <b>Back</b>
                </div>
            </a>

            @else
            <div class="cartProduk w-75 p-3 m-3" style="background-color: silver">
                <h1>
                    <a href="/productCatalogue/{{ $produk['slug'] }}">{{ $produk['name'] }}</a>
                </h1>
                <img src="{{ asset('assets/img/' . $produk['image']) }}" alt="">
                <h3>Status: {{ $produk['status'] }}</h3>
                <h4>Harga: Rp{{ $produk['price'] }}</h4>
                <p>{{ $produk['description'] }}</p>
            </div>
            <a href="/productCatalogue">
                <div class="btn btn-primary px-5 py-3">
                    <b>Back</b>
                </div>
            </a>
            @endif
        @endif
    @endforeach
</div>
@endsection
