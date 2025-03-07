@extends('layout')

@section('title', 'Contact')

@section('content')
  <div class="hero_area">
    <!-- header section starts -->
    @include('header')
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="col-md-6">
        <div class="d-flex mb-4 ml-4 ml-md-0">
          <h2 class="custom_heading text-center">
            CONTACT US
          </h2>
        </div>
        <form action="">
          <div>
            <input type="text" placeholder="Name" />
          </div>
          <div>
            <input type="email" placeholder="Email" />
          </div>
          <div>
            <input type="text" placeholder="Phone Number" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex justify-content-center mt-4">
            <button type="submit">
              SEND
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  {{-- @include('info') --}}
  <!-- end info section -->

  <!-- footer section -->
  @include('footer')
  <!-- end footer section -->
@endsection
