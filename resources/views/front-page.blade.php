{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}
    <section class="hero__section container">
      <h2 class="thin-header">The leading travel and dining blog lorem ipsum</h2>
      <div class="jump-to__section">
        <span class="jump-text">Jump to:</span>
        <a href="#travel-section">Travel</a>
        <a href="#travel-section">Dining</a>
      </div>
    </section>


    @include('partials.featured-section')

    @include('partials.content-page')

    <section class="destination__section container">
      <h2 class="section-header extra-spacing">Destination of the month</h2>
      <div class="destination__inner-section">
          <div class="manhattan__feature">
              <div class="manhattan__left __lt-6">
                  <img src="@asset('images/manhattan.svg')">
              </div>
              <div class="manhattan__right __lt-6">
                <h3>Our destination of the month for April is MANHATTAN.</h3>
                <p>We have put together a 7 day 6 night itinerary for your perfect trip to the big apple.</p>
                <p>Donec iaculis tincidunt semper rutrum dictumst dui mattis convallis fusce a ad torquent nostra a ac.Fames varius parturient tellus nec condimentum sagittis adipiscing fringilla in a habitasse.</p>
                <p>Scelerisque cubilia condimentum parturient urna congue condimentum praesent ligula eu adipiscing nisl dignissim mattis a porttitor fusce fringilla a varius condimentum potenti eu litora cum ullamcorper.A quisque vel a mus torquent a dolor eu egestas et condimentum sociosqu tellus id posuere habitasse eu nisl dolor sem sodales.</p>
                <a class="button read-more" href="">Contact Us</a>
              </div>
          </div>
      </div> 

    </section>

    @include('partials.top-travel')

    <section class="instagram__section">
        <div class="instagram__header">
          <img src="@asset('images/instagram-logo.svg')">
          <h2 class="thin-header">See what we've been up to</h2>
        </div>
    </section>
  @endwhile
@endsection
