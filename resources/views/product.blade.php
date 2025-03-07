@extends('layout')

@section('title', 'Products')

@section('content')
<div class="hero_area">
    
</div>

<section class="product_section layout_padding">
    <div class="d-flex justify-content-center">
        <h2 class="custom_heading">OUR PRODUCTS</h2>
    </div>
    <div class="container layout_padding2">
        {{-- @foreach($products as $product) --}}
            {{-- <div class="img-box">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
            </div> --}}
        {{-- @endforeach --}}
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{ route('products') }}">See More</a>
    </div>
</section>

<section class="info_section layout_padding">
    <div class="container layout_padding-top layout_padding2-bottom">
        <div class="logo-box">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/info-logo.png') }}" alt="">
            </a>
        </div>
        <div class="info_items">
            <a href="#">
                <div class="item">
                    <div class="img-box box-1">
                        <img src="{{ asset('images/location-white.png') }}" alt="" />
                    </div>
                    <div class="detail-box">
                        <p>It is a long established fact that a reader will be distracted...</p>
                    </div>
                </div>
            </a>
            <a href="mailto:demo@gmail.com">
                <div class="item">
                    <div class="img-box box-3">
                        <img src="{{ asset('images/envelope-white.png') }}" alt="" />
                    </div>
                    <div class="detail-box">
                        <p>demo@gmail.com</p>
                    </div>
                </div>
            </a>
            <a href="tel:+021234567890">
                <div class="item">
                    <div class="img-box box-2">
                        <img src="{{ asset('images/telephone-white.png') }}" alt="" />
                    </div>
                    <div class="detail-box">
                        <p>+02 1234567890</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="container-fluid footer_section">
    <p>&copy; 2025 All Rights Reserved By <a href="https://html.design/">Himalix</a></p>
</section>
@endsection
