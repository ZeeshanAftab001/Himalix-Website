@extends('layout')

@section('content')
<div class="hero_area">
    <!-- header section starts -->
    @include('header')
    <!-- end header section -->

    <!-- hero section -->
    <section class="hero_section">
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <div class="cloud cloud-3"></div>
        <div class="hero_detail">
            <h1>HIMALIX</h1>
            <h3>Natural Shilajit</h3>
        </div>
        <div class="hero_btn-box">
            <a href="{{ route('about') }}">Contact Us</a>
        </div>
    </section>
</div>

<!-- About Section -->
<section class="about_section layout_padding">
    <div class="container">
        <h2 class="custom_heading">About Us</h2>
        <p>At Himalayan Shilajit, we provide 100% pure, authentic shilajit sourced from the Himalayas.</p>
        <a href="{{ route('about') }}">Read More</a>
    </div>
</section>

<!-- Product Section -->
<section class="product_section layout_padding">
    <div class="container">
        <h2 class="custom_heading">OUR PRODUCTS</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
            @endforeach
        </div>
        <a href="{{ route('products') }}">See More</a>
    </div>
</section>

<!-- Why Section -->
<section class="why_section layout_padding">
    <div class="container text-center">
        <h2 class="custom_heading">Why Choose Us</h2>
        <p>At Himalix, we ensure top-quality products with rigorous testing.</p>
        <a href="{{ route('about') }}">Read More</a>
    </div>
</section>

<!-- Contact Section -->
<section class="contact_section layout_padding">
    <div class="container">
        <h2 class="custom_heading text-center">CONTACT US</h2>
        <form action="" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit">SEND</button>
        </form>
    </div>
</section>

<!-- Footer Section -->
@include('footer')
@endsection
