@extends('layout')
@section('content')
  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach ($promotions as $index => $promotion)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="active"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($promotions as $index => $promotion)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <img src="{{ asset('storage/' . $promotion->image) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="carousel-heading">{{ $promotion->title }}</h5>
            <p class="d-none d-md-block carousel-paragraph">{{ $promotion->description }}</p>
            <a class="badge badge-pill p-3 carousel-btn" href="{{ $promotion->link }}">Learn more</a>
          </div>

        </div>
      @endforeach
    </div>
  </div>

  <section class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <h2>Repair and Assistance iPhone, Mac, PC and Tablet in the city of Milan.</h2>
        <p class="font-weight-bold">For us, the happiness of our customers is the top priority. Our commitment to
          iPhone
          and Mac repair and service is based on guaranteed satisfaction, ensuring that every
          repaired device returns to its optimal performance. The satisfaction of our customers
          is at the heart of our repair service.</p>
        <a href="#contact-us" class="badge badge-pill p-3 primary-btn">Contact us</a>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('images/brokenphone.png') }}" class="img-fluid" alt="Our Vision">
      </div>
    </div>
  </section>



  @if (count($services) > 0)
    <!-- Services Section -->
    <section class="container-fluid mt-5 p-3" id="services">
      <h2 class="text-center section-title">Our Services</h2>
      <div class="container">
        <div class="row mt-4">
          @foreach ($services as $service)
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $service->title }}</h5>
                  <p class="card-text">{{ $service->description }}</p>
                  <a href="{{ route('pages.service', $service->id) }}" class="badge badge-pill p-3 primary-btn">Learn
                    More</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif
  <!-- Section with Title, Paragraph, and Image -->
  <section class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h2>AFFORDABLE MOBILE PHONE
          & TABLET DEVICE REPAIR SHOP</h2>
        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum
          as their default model text, and a search for ‘lorem ipsum’ will uncover many
          web sites. During the meeting you will receive plenty of information concerning
          the most effective solutions for personal and property protection.</p>
      </div>
      <div class="col-md-4">
        <div class="slider-container">
          <div class="slider-image before" style="background-image: url('{{ asset('images/phone-before-fix.png') }}');">
          </div>
          <div class="slider-image after" style="background-image: url('{{ asset('images/phone-after-fix.png') }}');">
          </div>
          <div class="slider-handle"></div>
        </div>
      </div>
    </div>
  </section>
@endsection
