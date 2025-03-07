@extends('layout')

@section('title', 'Himalix - Home')

@section('content')
    <section class="hero_section">
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <div class="cloud cloud-3"></div>
        <div class="hero_detail">
            <h1>
                <span>H</span><span>I</span><span>M</span><span>A</span><span>L</span><span>I</span><span>X</span>
            </h1>
            <h3>Natural Shilajit</h3>
        </div>
        <div class="hero_btn-box">
            <a href="{{ route('contact') }}">Contact Us</a>
        </div>
    </section>

    <section class="about_section layout_padding">
        <div class="about_container">
            <div class="container">
                <div class="detail">
                    <h2 class="custom_heading">About Us</h2>
                    <p>At Himalayan Shilajit, we provide 100% pure, authentic shilajit sourced from the Himalayas.</p>
                    <div><a href="{{ route('about') }}">Read More</a></div>
                </div>
                <div class="detail-2">
                    <p>We ensure top-quality through rigorous testing, delivering a natural solution for stamina, immunity, and cognitive support.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="product_section layout_padding">
        <div class="d-flex justify-content-center">
            <h2 class="custom_heading">OUR PRODUCTS</h2>
        </div>
        <div class="container layout_padding2">
            <div class="img-box box-1"><img src="{{ asset('images/jar1.jpg') }}" alt=""></div>
            <div class="img-box box-2"><img src="{{ asset('images/jar3.jpg') }}" alt=""></div>
            <div class="img-box box-3"><img src="{{ asset('images/jar2.jpg') }}" alt=""></div>
            <div class="img-box box-4"><img src="{{ asset('images/jar4.jpg') }}" alt=""></div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('products') }}">See More</a>
        </div>
    </section>

    <section class="contact_section layout_padding">
        <div class="container">
            <div class="col-md-6">
                <h2 class="custom_heading text-center">CONTACT US</h2>
                <form action="" method="POST">
                    @csrf
                    <div><input type="text" name="name" placeholder="Name"></div>
                    <div><input type="email" name="email" placeholder="Email"></div>
                    <div><input type="text" name="phone" placeholder="Phone Number"></div>
                    <div><input type="text" name="message" class="message-box" placeholder="Message"></div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
